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
</head>
<body>
    
<div class="navbar">
<form action="index.php" method="post">

<h1 style="color:white;" >Bejelentkezés</h1>
<input type="text" name="username" placeholder="Felhasználó" ><br>
<input type="password" name="password" placeholder="Jelszó" ><br>
<input type="submit" name="submit" value="Belépés" 
style="
border:solid white;
background-color: black;
color: white;
cursor: pointer;
" >
<br>
<br>
<div style="color: white;" >
<?php


if(isset($_POST["submit"])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];


    setcookie("username", $username , time() + (86400 * 4), "/");
    setcookie("password", $password , time() + (86400 * 4), "/");


    if($username == "Varadi" && $password =="Varadi12345" ){
        header("Location: home.php");
    }

    if($username == "Bulcsú" && $password =="Bulcsú" ){
        header("Location: home.php");
    }

    if($username == "Harcsa" && $password =="Harcsa303242" ){
        header("Location: home.php");
    }

    if($username == "ShireLix" && $password =="NemKicsiAKugi18" ){
        header("Location: home.php");
    }
  
    elseif(empty($username || $password )){
        echo"Töltsd ki miden mezőt<br>";
    }

else{
    echo"helytelen felhasználónév vagy jelszó";
}



}

?>
</div>
</form>
</div>

</body>
</html>


