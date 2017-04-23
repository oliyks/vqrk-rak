<?php require_once('head.php'); ?>
<div id="wrap">
	<h3>Valiku tulemus</h3>

<?php
if (!empty($_POST['pilt'])){
    $sisse=$_POST['pilt'];
    $leitud=false;
    foreach ($pildikogu as $pilt) {
         
        if (in_array ($sisse,$pilt)) $leitud = true;
    }
    if ($leitud) {
        echo "Valitud on pilt nr ".$sisse;
        $_SESSION['voted_for'] = $sisse;
    } else {
        echo "Sellist pilti pole";
    }
} else {
    echo "Sisendparameeter puudub";
}
?>

</div>
<?php require_once('foot.php'); ?>

