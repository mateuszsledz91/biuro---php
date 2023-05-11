<!DOCTYPE html>
<html lang="pl">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podróże dalekie i bliskie</title>
    <link rel="stylesheet" href=styl6.css>
</head>
<body>

<div id=banner>
<h1>Biuro podrózy: WESOŁA WYPRAWA</h1>
</div>


<div id=ciasteczka>
<?php
$name = "ciastko";
$value = "1";
setcookie($name,$value,time() + 3600);

if(!isset($_COOKIE[$name])){
  echo "witaj! nasza strona używa ciasteczek";
}else{
  echo "Witaj ponownie na naszej stronie";
}

?>
</div>


<div id=lewy>
<table>

<tr>
    <td><img src="polska.jpg" alt="zwiedzanie krakowa" /></td>
    <td><img src="wlochy.jpg" alt="Wenecja i nie tylko" /></td>
  </tr>
  <tr>
    <td><img src="grecja.jpg" alt="gorące Greckie wyspy" /></td>
    <td><img src="hiszpania.jpg" alt="Słoneczna Barcelona" /></td>
  </tr>
</table>
</div>


<div id=prawy>
<h3>Proponujemy wycieczki</h3>
<ul>
<li>autokarowe</li>
<ol><li>po polsce z przewodnikiem</li>
<li>do Niemiec i Czech</li>
</ol>
<li>samolotem</li>
<ol><li>wczasy w Grecji</li>
<li>zwiedzanie Barcelony</li>
<li>zwiedzanie Wenecji</li>
</ol>
</ul>
<h3>Pobierz dokumenty</h3>
<p><a href=regulamin.txt>Regulamin korzystania z usług biura podróży</a></p>
<p><a target="_blank" href=http://galeria.pl/.>Tu znajdziesz zdjęcia z naszych wycieczek</a></p>
</div>


<div id=stopka>
Stronę przygotował: - Mateusz Śledź kl.4tib
</div>










</body>
</html>