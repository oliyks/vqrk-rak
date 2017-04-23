<?php require_once('head.php'); ?>
<div id="wrap">
	<h3>Valiku tulemus</h3>

<?php
if (!empty($_GET['pilt'])){
    $leitud=false;
    foreach ($pildikogu as $pilt) {
         
        if (in_array ($_GET['pilt'],$pilt)) $leitud = true;
    }
    if ($leitud) {
        echo "Valitud on pilt nr ".$_GET['pilt'];
    } else {
        echo "Sellist pilti pole";
    }
} else {
    echo "Sisendparameeter puudub";
}
?>

</div>
<?php require_once('foot.php'); ?>

