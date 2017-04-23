<?php require_once('head.php'); ?>
<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="?page=tulemus" method="POST">

        <?php foreach ($pildikogu as $pilt):
            echo "<p><label for=\"".$pilt['pid']."\"><img src=\"".$pilt['src']."\" alt=\"".$pilt['alt']."\" height=\"100\"/></label><input type=\"radio\" value=\"".$pilt['id']."\" id=\"".$pilt['pid']."\" name=\"pilt\"/></p>\n";
         endforeach;?>
		<br/>
         <?php 
          if (isset($_SESSION['voted_for'])) {
            echo "Oled varem hääletanud pildi nr ".$_SESSION['voted_for']." poolt. Kui soovid häält tühistada kliki siia: <a href=\"?page=vote&lopp=1\">tühista</a>"; }
          else echo "	<input type=\"submit\" value=\"Valin!\"/>"; ?>
	</form>

</div>
<?php require_once('foot.php'); ?>

