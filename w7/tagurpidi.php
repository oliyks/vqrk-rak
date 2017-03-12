<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>tagurpidi</title>
<style type="text/css">
</style>
</head>

<body>

<?php

$sone='Lorem ipsum dolor sit amet, consectetur adipiscing elit. ';


$tagurpidi='';
$pikkus=strlen($sone);

for ($i = 1; $i <= $pikkus; $i++) {
    $tagurpidi=$tagurpidi.$sone[$pikkus-$i];
}

echo "<p>Algne sõne: $sone</p>";
echo "<p>Pööratud sõne: $tagurpidi</p>";

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

