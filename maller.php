
<?php  
  $to = "abc@example.com";  
  $subject = "This is subject";  
  $message = "This is a text message.";  
  # Open a file  
  $file = fopen("/tmp/test.txt", "r" );//change your file location  
  if( $file == false )  
  {  
     echo "Error in opening file";  
     exit();  
  }  
  # Read the file into a variable  
  $size = filesize("/tmp/test.txt");  
  $content = fread( $file, $size);  
  
  # encode the data for safe transit  
  # and insert \r\n after every 76 chars.  
  $encoded_content = chunk_split( base64_encode($content));  
    
  # Get a random 32 bit number using time() as seed.  
  $num = md5( time() );  
  
  # Define the main headers.  
  $header = "From:xyz@example.com\r\n";  
  $header .= "MIME-Version: 1.0\r\n";  
  $header .= "Content-Type: multipart/mixed; ";  
  $header .= "boundary=$num\r\n";  
  $header .= "--$num\r\n";  
  
  # Define the message section  
  $header .= "Content-Type: text/plain\r\n";  
  $header .= "Content-Transfer-Encoding:8bit\r\n\n";  
  $header .= "$message\r\n";  
  $header .= "--$num\r\n";  
  
  # Define the attachment section  
  $header .= "Content-Type:  multipart/mixed; ";  
  $header .= "name=\"test.txt\"\r\n";  
  $header .= "Content-Transfer-Encoding:base64\r\n";  
  $header .= "Content-Disposition:attachment; ";  
  $header .= "filename=\"test.txt\"\r\n\n";  
  $header .= "$encoded_content\r\n";  
  $header .= "--$num--";  
  
  # Send email now  
  $result = mail ( $to, $subject, "", $header );  
  if( $result == true ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }  
?>  