<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váradi</title>
    <link rel="icon" href="Váradi.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo:ital@1&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

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




@media only screen and (max-width: 1400px) {
   
   .navbar1{
       text-align: center;
   }
       .container1{
        margin-left: 0%;
        margin-right: 0%;
       }

.profil{

text-align: center;

       }

.profil img {

width: 7%;
    
}

.profil a {

font-size: 0px;
    
}
   

.margin{
    margin-left: 2%;
        margin-right: 2%;
}

     }


     @media only screen and (max-width: 600px) {


.profil img {

width: 17%;
    
}


.profil a {

font-size: 0px;
    
}


     }
</style>

</head>
<body>
    
<div class="navbar1">

<a href="#home">Home</a>
<a href="#Tudasasom">Tudásom</a>
<a href="#munkaim">Munkáim</a>

</div>

<div id="home">
<div class="container1">
    <img src="tf.jpg" alt="Hatter" style="width:100%;">
    <div class="centered"><h1>Váradi Zsolt</h1></div>
   
</div>
</div>


<br>
<div class="margin">
<h1>Tudásom</h1>
<hr>
</div>
<div id="Tudasasom">
<div class="container">
    <div class="row" style="text-align: center;" >
      <div class="col-sm">
        <br>
<h2>HTML</h2>
<p>A HTML (angolul: HyperText Markup Language, „hiperszöveges jelölőnyelv”) egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a W3C (World Wide Web Consortium) támogatásával.
</p>
    </div>
      <br>
      <div class="col-sm">
        <br>
        <h2>CSS</h2>
        A CSS az angol „cascading style sheets” kifejezés rövidítése, ami magyarul „egymásba ágyazott stíluslapokat” jelent. A hangsúly a „stíluson” van – míg a HTML a weblap szerkezetét határozza meg (főcímek, bekezdések, stb.).
    </div>
      <br>
      <div class="col-sm">
        <br>
        <h2>PHP</h2>
<p>A PHP egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére. Az első szkriptnyelvek egyike, amely külső fájl használata helyett HTML oldalba ágyazható. A kódot a webszerver PHP feldolgozómodulja értelmezi.</p>
      </div>
  </div>
</div>
<br>
<br>
<div class="margin">
    <h1>Munkáim</h1>
    <hr>

<div id="munkaim">
    <div class="ezaz">
<a href="https://neurohungary.github.io/Neuro/">Neuro</a>
<a href="https://varadiprogram.github.io/9.a-2/">9.A/2</a>
<a href="https://varadiprogram.github.io/Portfolio/">Régi Portfolió</a>
<a href="https://varadiprogram.github.io/Utazasi-Iroda/">Utazási Iroda</a>
<a href="https://varadiprogram.github.io/ZS-K-UTCAI-PARKOL-H-Z/">Zsákutcai Parkolóház</a>
<a href="https://varadiprogram.github.io/kozep/nyomtatas.html">Nyomtatási Iroda</a>
<a href="https://varadiprogram.github.io/sarkanyhajokozepszint/Sarkanyhajo.html">Sárkányhajó</a>
    </div>
</div>
</div>
<br>
<br>
<div class="margin">
<div class="profil" style="text-align: center;" >
 <a href="profil.php"><img src="https://cdn-icons-png.flaticon.com/512/3917/3917705.png" width="4%" ></a>

</div>
</div>
<br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


