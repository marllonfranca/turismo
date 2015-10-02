<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Documento sem título</title>
<?php
include('caminhos.php')
?>
<style> 
*{margin: 0; padding: 0;}
 
body{
font-family: arial, helvetica, sans-serif;
font-size: 12px;
}
 
.menu{
list-style:none;
border:1px solid #c0c0c0;
float:left;
}

.menu li{
position:relative;
float:left;
border-right:1px solid #c0c0c0;
}

.menu li a{color:#333; text-decoration:none; padding:5px 10px; display:block;}
 
.menu li a:hover{
background:#333;
color:#fff;
-moz-box-shadow:0 3px 10px 0 #CCC;
-webkit-box-shadow:0 3px 10px 0 #ccc;
text-shadow:0px 0px 5px #fff;
}

.menu li  ul{
position:absolute;
top:25px;
left:0;
background-color:#fff;
display:none;
}  
.menu li:hover ul, .menu li.over ul{display:block;}

.menu li ul li{
border:1px solid #c0c0c0;
display:block;
width:150px;
}




</style>

</head>
<body>

     <nav>
  <ul class="menu navbar">
        <li><a href="#">Home</a></li>
<!--        <li><a href="">Estados</a></li>-->
            <li><a href="cidade.php">Cidades</a>
                <!--<ul>
                      <li><a href="#">Web Design</a></li>
                      <li><a href="#">SEO</a></li>
                      <li><a href="#">Design</a></li>                   
                </ul>-->
            </li>
        <li><a href="viagens.php">Viagens</a></li>
        <li><a href="hotel.php">Hoteis</a></li>               
</ul>
</nav>
</body></html>