<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Praktikum  - Ülesanne</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="header">
	<ul>
		<li><a href="pealeht.php">Pealeht</a></li>
		<li><a href="galerii.php">Galerii</a></li>
		<li><a href="vote.php">Hääletamine</a></li>
	</ul>
</div>
<div id="banner">
	<img src="../banner1.jpg" alt="banner">
</div>
<?php
$pildikogu = array(
    array('id'=>1, 'src'=>'../pildid/nameless1.jpg', 'pid'=>'p1', 'alt'=>'nimetu 1'),
    array('id'=>2, 'src'=>'../pildid/nameless2.jpg', 'pid'=>'p2', 'alt'=>'nimetu 2'),
    array('id'=>3, 'src'=>'../pildid/nameless3.jpg', 'pid'=>'p3', 'alt'=>'nimetu 3'),
    array('id'=>4, 'src'=>'../pildid/nameless4.jpg', 'pid'=>'p4', 'alt'=>'nimetu 4'),
    array('id'=>5, 'src'=>'../pildid/nameless5.jpg', 'pid'=>'p5', 'alt'=>'nimetu 5'),
    array('id'=>6, 'src'=>'../pildid/nameless6.jpg', 'pid'=>'p6', 'alt'=>'nimetu 6')
);

?>
