<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>kommentaar</title>
<?php
$bg_col="#ffffff"; 
if (isset($_POST['bg_color']) && $_POST['bg_color']!="") { $bg_col=htmlspecialchars($_POST['bg_color']); }
$txt_col="#000000"; 
if (isset($_POST['txt_color']) && $_POST['txt_color']!="") { $txt_col=htmlspecialchars($_POST['txt_color']); }
$bord_w=1; 
if (isset($_POST['b_w']) && $_POST['b_w']!="") { $bord_w=htmlspecialchars($_POST['b_w']); }
$bord_r=10; 
if (isset($_POST['b_r']) && $_POST['b_r']!="") { $bord_r=htmlspecialchars($_POST['b_r']); }
$text="elas kord ..."; 
if (isset($_POST['txt_in']) && $_POST['txt_in']!="") { $text=htmlspecialchars($_POST['txt_in']); }

?>
<style type="text/css">
  .kommentaar {width: 300px; height: 150px; margin: 5px; background:<?php echo $bg_col; ?>; color: <?php echo $txt_col; ?>; border-style: solid; border-color:#000; border-width: <?php echo $bord_w; ?>px; border-radius:<?php echo $bord_r; ?>px; }
</style>
</head>

<body>

<div class=kommentaar><?php echo $text; ?></div>

<form action="kommentaar.php" method="post">
  Kommentaar:<br><textarea name="txt_in" rows="5" cols="30"><?php echo $text; ?></textarea><br>
  Taust:<input type="color" name="bg_color" value="<?php echo $bg_col; ?>"><br>
  Tekst:<input type="color" name="txt_color" value="<?php echo $txt_col; ?>"><br>
  Piirjoone laius:<input type="range" name="b_w" min="0" max="20" value="<?php echo $bord_w; ?>"><br>
  Piirjoone radius:<input type="range" name="b_r" min="0" max="20" value="<?php echo $bord_r; ?>"><br>
  <input type="submit">
</form>


<p>
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>

</p>
</body>
</html>

