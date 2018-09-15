<?php

session_start();
 
if($_SESSION['logeado'] !='1')
{
  header('Location: http://mendiacademy.com.mx/nethome/login.php');
}
?>


<!DOCTYPE html>
<html lang="es" >

<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="icon" href="img/mendi.ico"/>
  
  
      <link rel="stylesheet" href="css/style.css">
      
      <link rel="stylesheet" href="css/style2.css">

  
  <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '7de5405f-ad33-4d9a-833e-ad92a29f38e9', f: true }); done = true; } }; })();</script>
  

</head>

<body>

  
<!-- Menu page question menu ------------------------------------------------ -->
<header class="display-flex flex-justify-content-between flex-align-items-center">
    <figure class="logo margin-x-5 margin-y-2">
      <img src="img/MendiLogo.png" alt="Study Buddies Logo">
    </figure>
    <figure class="user-avatar margin-x-5">
      <img src="img/588a64d2d06f6719692a2d0e.png" alt="(User Name) Avatar"  data-toggle="dropdown" data-toggle-ref="dropdown">
      <ul class="dropdown" id="dropdown">
      <li>
        <div class="user-info">
          <span class="user-name"><?php echo  $_SESSION['nombre'];?></span>
          <!--  <span class="user-email"><?php echo $_SESSION['grado'].'º'.$_SESSION['nivel']; ?></span> -->
       	 <!--  <span class="user-email"><?php echo $_SESSION['mod']."-Learning";?></span> -->
        </div>
        <div class="user-avatar-space"></div>
      </li>
    <!--  <li><a href="http://mendiacademy.com.mx/nethome/profile.php">Perfil</a></li>      se comenta todavia no listo-->
     <!--   <li><a href="http://mendiacademy.com.mx/nethome/general.php">Avance</a></li>    se comenta todavia no listo-->
      <li><a href="http://mendiacademy.com.mx/nethome/salir.php">Salir</a></li>
    </ul>
    </figure>
  </header>

<!-- Page surface wrap except question menu ------------------------------------------------ -->


<!-- Header ------------------------------------------------ -->


<!-- Menu page Main surface ------------------------------------------------ -->


  <div class="mn-app-wrap">
  <div class="mn-main">    

<?php
//dinamico para sacar las materias dependiendo de el alumno a las que se encuentre inscrito
include 'conexion.php';

$nivel=$_SESSION['nivel'];
$grado=$_SESSION['grado'];

$usuario=$_POST['nom'];

$resultado = $mysqli->query("SELECT * FROM materias where nivel ='$nivel' and grado ='$grado'");
$mysqli->query("SET NAMES 'utf8'");

$c=1;


while ($fila = $resultado->fetch_assoc()) {

 
    echo "<div class=\"mn-square\">
    <div class=\"mn-content mn-c".$c."\">
    	<i class=\"material-icons\">"."account_balance</i>
        <span class=\"mn-card-title\">".$fila['nombre']."</span>."."<span class=\"mn-card-summary\" >"."<input name=\"mate\" type=\"button\" value=\"ver\" class=\"homebutton\" id=\"btnHome\" onClick=\"Javascript:window.location.href ='http://mendiacademy.com.mx/nethome/menutemas.php?materia=".$fila['id_materia']."&name=".$fila['nombre']."';\">"."</span></div>
  </div>";
     $c=$c+1;
     }
  
?>

 
  
    </div>
</div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>
    <script  src="js/index2.js"></script>	



</body>

</html>
