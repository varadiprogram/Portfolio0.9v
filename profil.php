<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váradi</title>
    <link rel="icon" href="Váradi.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo:ital@1&display=swap" rel="stylesheet">
    <style>
    body{
    background-color:#292929;
    margin: 0;
    font-family: 'Exo', sans-serif;
    }

.navbar1{
overflow: hidden;
border:solid #1c1c1c;
background-color: #1c1c1c;
padding: 10px;
}
.navbar1 a{
    color: white;
    padding: 10px 10px;
    text-decoration: none;
}

.container1 {
  position: relative;
  text-align: center;
  color: white;
  margin-left: 17%;
  margin-right: 17%;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.margin{
    margin-left: 17%;
  margin-right: 17%;
  color: white;
}
.row{
    color: white;
}

.ezaz a{
font-size: 20px;
padding: 15px 15px;
}
.ezaz{
    text-align: center;
}

.dologok{
    text-align: center;
    margin-top: 20%;
    font-size: 20px;
}




@media only screen and (max-width: 1400px){


    .navbar1{
       text-align: center;
   }

   .margin{
    margin-left: 2%;
        margin-right: 2%;
}


.dologok{
    text-align: center;
}

}
</style>
</head>
<body>

<div class="navbar1">

<a href="home.php">Home</a>
<a href="home.php">Tudásom</a>
<a href="home.php">Munkáim</a>

</div>
<div class="margin">
<div class="dologok">
<?php

if(isset($_COOKIE["username"])){
    echo"a te felhasználóneved : {$_COOKIE["username"]}";
}

else{
    echo"nem tudom a felhasználónevedet";
}


echo"<br>";

if(isset($_COOKIE["password"])){
    echo"a te jelszavad : {$_COOKIE["password"]}";
}

else{
    echo"nem tudom a jelszavad";
}

?>
</div>
</div>

</body>
</html>