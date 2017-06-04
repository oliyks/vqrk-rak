<?php


function connect_db(){
        global $connection;
        $host="localhost";
        $user="test";
        $pass="t3st3r123";
        $db="test";
        $connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
        mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}


function logi(){
        if(isset($_SESSION['user'])):
                header("Location: securefile.php?page=failid");
                die();
        else:
          global $connection;
          if($_SERVER['REQUEST_METHOD'] == 'POST'): 
                $parool=mysqli_real_escape_string($connection, $_POST['parool']);
                $ql="select id from toja_failikasutajad where parool=SHA2(CONCAT('yahze9Faki','".$parool."'),256)";
                $rl = mysqli_query($connection, $ql) or die("$query - ".mysqli_error($connection));
                if (mysqli_num_rows($rl)==1):
                        $_SESSION['user']=true;
                        header("Location: securefile.php?page=failid");
                        die();
                else:
                        $errors[]= "parool ei sobinud!";
                endif;
                        
          endif;
        endif;
        include_once('views/login.html');
        die();
}


function logout(){
        $_SESSION=array();
        session_destroy();
        header("Location: ?");
}


function failid() {

	$dir    = '/home/toja/i244-failid';


        if (isset($_POST['file']) || isset($_GET['file'])) {
            if (isset($_POST['file'])) {
                hangi_fail(htmlspecialchars($_POST['file']));
            } else {
                hangi_fail(htmlspecialchars($_GET['file']));
            }
         exit;
       }




	$files = scandir($dir);
	// https://stackoverflow.com/questions/4967643/how-do-i-exclude-hidden-folders-and-files-from-readdir
	$files = array_filter($files, create_function('$a','return ($a[0]!=".");'));

	include_once('views/failid.html');

}

function hangi_fail($file_name) {

//http://www.bitrepository.com/prevent-directory-traversal-attacks-in-php-wordpress.html

$files_folder = '/home/toja/i244-failid';

// No ../ are allowed and something has to be requested
if( ($file_name == '') || (strpos($file_name, '../') !== false) ) {
    exit('Invalid Request');
}
// Now let's see if the file really exists in $files_folder
$path_to_folder =$files_folder.'/';

$files_in_folder = @scandir($path_to_folder);

if( ! in_array($file_name, $files_in_folder) ) {
    exit('Files does not exist.');
}

$path_to_file = $path_to_folder . $file_name;

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past

header("Content-Description: File Transfer");

header("Content-Type: application/save");

header("Content-Length: ".filesize($path_to_file));
header("Content-Disposition: attachment; filename=".$file_name); 
header("Content-Transfer-Encoding: binary");

readfile($path_to_file);
exit;

}



?>


