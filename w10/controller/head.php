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
		<li><a href="?page=main">Pealeht</a></li>
		<li><a href="?page=gallery">Galerii</a></li>
		<li><a href="?page=vote">Hääletamine</a></li>
	</ul>
</div>
<div id="banner">
	<img src="../../w9/banner1.jpg" alt="banner">
</div>
<?php
$pildikogu = array(
    array('id'=>1, 'src'=>'../../w9/pildid/nameless1.jpg', 'pid'=>'p1', 'alt'=>'nimetu 1'),
    array('id'=>2, 'src'=>'../../w9/pildid/nameless2.jpg', 'pid'=>'p2', 'alt'=>'nimetu 2'),
    array('id'=>3, 'src'=>'../../w9/pildid/nameless3.jpg', 'pid'=>'p3', 'alt'=>'nimetu 3'),
    array('id'=>4, 'src'=>'../../w9/pildid/nameless4.jpg', 'pid'=>'p4', 'alt'=>'nimetu 4'),
    array('id'=>5, 'src'=>'../../w9/pildid/nameless5.jpg', 'pid'=>'p5', 'alt'=>'nimetu 5'),
    array('id'=>6, 'src'=>'../../w9/pildid/nameless6.jpg', 'pid'=>'p6', 'alt'=>'nimetu 6')
);

session_start();

if (!empty($_GET['lopp'])) {

  $_SESSION = array();
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
session_start();

}

?>
