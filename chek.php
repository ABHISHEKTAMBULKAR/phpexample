<html>
<head>
<style>
#header{height:80px;width: 100%}
#menudiv{
height:20px;width:99.7%;border:solid:1px; color:red;
}
.cls{ height:20px;width:10%;border:solid:1px; background-color:#ffjxkm; margin-left:150px; float:left; text-align:center;font-style:italic; font color :red; }
.cls:hover{
background-color: white; font color:black; text-align:center;
}
#bodydiv {height:600px; width:100%;
}
#leftbody {height:100%; width:15%;float:left;background-color:#F0F0F0
}
#centerbody{ height:100%; width:70%;  float:left;}
#rightbody{height:100%; width:15%;float:right; background-color:#F0F0F0}
#footerdiv{height:80px;width: 100%}
#imgdiv{ height:300px; width:100%;}
#infodiv{ height:300px; width:20px;    padding: 5px;
    text-align: center;
    background-color: #000000;
    border: solid 1px #c3c3c3; float:right; margin-top:100px;}
	#panel{ height:300px; width:100%;   
	 padding: 50px;
    display: none;
    text-align: center;
    background-color: #000000;
    border: solid 1px #c3c3c3; float:right; margin-top:100px;}
</style>
<script src="js/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#infodiv").click(function(){
        $("#panel").slidedown("slow");
    });
});

</script>

</head>
<body>
<div id = "header">
</div>

<div id ="menudiv" style ="height:20px;width:99.7%;border:solid:1px;background-color:red; float:left; ">
<div id ="leftdiv1" class =" cls" >
<a href ="https://www.w3schools.com">Home</a>
</div>
<div id ="leftdiv2" class =" cls" > <a href ="https://www.w3schools.com">contact us</a>
</div>
<div id ="leftdiv3" class =" cls" > <a href ="https://www.w3schools.com">About us</a>
</div>
<div id ="leftdiv4" class =" cls" ><a href ="https://www.w3schools.com">Feedback</a>
</div>

</div>
<div id = "bodydiv" >
<div id = "leftbody">
</div>
<div id = "centerbody">
<div id = "imgdiv ">
</div>
</div>
<div id = "rightbody">
<div id = "infodiv">
<div id ="panel">
<?php  
echo "<h2>Hello First PHP</h2>";  
?>  
</div>
</div>
</div>

</div>
<div id = "footerdiv">
</div>
</body>
</html>