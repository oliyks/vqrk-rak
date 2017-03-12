<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>template</title>
<style type="text/css">
 .element {display:inline-block; float:left; width:29%; border:solid #c0c0c0 2px; border-radius:5px; padding:10px; margin:1%;}
</style>
</head>

<body>
<?php

/* http://www.efis.ee/ 2017 aasta filmid */
$filmid = array (
array ('nimi'=>'Appi, ma vajan armastust', 'aasta'=>'2017', 'zanr'=>'Dokumentaalfilm', 'rezissoor'=>'Minna Hint'),
array ('nimi'=>'Tuhamäed', 'aasta'=>'2017', 'zanr'=>'Dokumentaalfilm', 'rezissoor'=>'Ivar Murd'),
array ('nimi'=>'Sangarid', 'aasta'=>'2017', 'zanr'=>'Mängufilm, Täispikk mängufilm', 'rezissoor'=>'Jaak Kilmi'),
array ('nimi'=>'Armastus...', 'aasta'=>'2017', 'zanr'=>'Dokumentaalfilm', 'rezissoor'=>'Sandra Jõgeva'),
array ('nimi'=>'Jaanipäev', 'aasta'=>'2017', 'zanr'=>'Dokumentaalfilm', 'rezissoor'=>'Aleksandr Heifets, Jaak Kilmi'),
array ('nimi'=>'Elu kombinaadi keldris', 'aasta'=>'2017', 'zanr'=>'Dokumentaalfilm', 'rezissoor'=>'Triin Ruumet'),
array ('nimi'=>'Miriam järve ääres', 'aasta'=>'2017', 'zanr'=>'Animafilm, Joonisfilm, Nukufilm', 'rezissoor'=>'Riho Unt, Sergei Kibus'),
array ('nimi'=>'Lumi Punasel lagedal', 'aasta'=>'2017', 'zanr'=>'Dokumentaalfilm, Probleemfilm', 'rezissoor'=>'Aljona Suržikova, Julia Ishakova'),
array ('nimi'=>'Pagulasega elutoas', 'aasta'=>'2017', 'zanr'=>'Dokumentaalfilm', 'rezissoor'=>'Kristina Norman')
);

foreach ($filmid as $film) {
  include('template.php');
}
?>

<p>
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>

</p>
</body>
</html>

