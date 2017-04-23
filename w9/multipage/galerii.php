<?php require_once('head.php'); ?>

<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
	<?php foreach ($pildikogu as $pilt): 
            echo "<img src=\"".$pilt['src']."\" alt=\"".$pilt['alt']."\"/>";
         endforeach;?>
	</div>
</div>

<?php require_once('foot.php'); ?>
