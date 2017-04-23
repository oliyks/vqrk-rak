<?php require_once('head.php'); ?>

<?php
$page=false;
if (isset($_GET['page'])) $page=$_GET['page'];
switch ($page) {
        case 'gallery':
            include('galerii.php');
            break;
        case 'vote':
            include('vote.php');
            break;
        case 'tulemus':
            include('tulemus.php');
            break;
        default:
            include('pealeht.php');
            break;
} ?>


<?php require_once('foot.php'); ?>

