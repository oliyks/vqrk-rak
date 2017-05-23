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
	// siia on vaja funktsionaalsust (13. nädalal)
	if(isset($_SESSION['user'])):
		header("Location: loomaaed.php?page=loomad");
		die();
	else:
	  global $connection;
	  if($_SERVER['REQUEST_METHOD'] == 'POST'): 
		$user=mysqli_real_escape_string($connection, $_POST['user']);
		$pass=mysqli_real_escape_string($connection, $_POST['pass']);
		$ql="select 1 from toja_kylastajad where username='".$user."' and passw=sha1('".$pass."')";
		$rl = mysqli_query($connection, $ql) or die("$query - ".mysqli_error($connection));
		if (mysqli_num_rows($rl)==1):
			$_SESSION['user']=true;
			header("Location: loomaaed.php?page=loomad");
			die();
		else:
			echo "Kasutajanime-parooli kombinatsioon ei sobinud!";
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

function kuva_puurid(){
         if(!isset($_SESSION['user'])):
		header("Location: loomaaed.php?page=login");
		die();
	endif;
	// siia on vaja funktsionaalsust
        global $connection;
        $puurid=[];
        $q1="select distinct(puur) from toja_loomaaed";
        $r1 = mysqli_query($connection, $q1) or die("$query - ".mysqli_error($connection));
        while ($row = mysqli_fetch_assoc($r1)) {
            $q2= "select nimi,liik from toja_loomaaed where puur =".$row['puur'];
            $r2 = mysqli_query($connection, $q2) or die("$query - ".mysqli_error($connection));
            $loom = 0;
            while ($row2 = mysqli_fetch_assoc($r2)) {
                $puurid[$row['puur']][$loom] = $row2;
                $loom++;
            }

        }

	include_once('views/puurid.html');
	
}

function lisa(){
	// siia on vaja funktsionaalsust (13. nädalal)
        if(!isset($_SESSION['user'])):
                header("Location: loomaaed.php?page=login");
                die();
	endif;
	if($_SERVER['REQUEST_METHOD'] == 'POST'):
	   $errors=array();
	   if(empty($_POST['nimi'])) $errors['tyhi_nimi'] = "Puudub nimi";
	   if(empty($_POST['puur'])) $errors['tyhi_puur'] = "Puudub puur";
	   $liik=upload("liik");
	   if($liik == "") $errors['laadimine'] = "Laadimine ei õnnestunud";
	   if(empty($errors)):
		global $connection;
		$nimi=mysqli_real_escape_string($connection, $_POST["nimi"]);
		$puur=mysqli_real_escape_string($connection, $_POST["puur"]);
		$liik=mysqli_real_escape_string($connection, $liik);
		$qi = "insert into toja_loomaaed (nimi,liik,puur) values ('$nimi','$liik','$puur')";
		$ri = mysqli_query($connection,$qi);
		if ($ri==1):
			header("Location: loomaaed.php?page=loomad");
			die();
		endif;
	    endif;
         endif;

	
	include_once('views/loomavorm.html');
	
}

function upload($name){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$allowedTypes = array("image/gif", "image/jpeg", "image/png","image/pjpeg");
        $exp=explode(".", $_FILES[$name]["name"]);
	$extension = end($exp);

	if ( in_array($_FILES[$name]["type"], $allowedTypes)
		&& ($_FILES[$name]["size"] < 100000)
		&& in_array($extension, $allowedExts)) {
    // fail õiget tüüpi ja suurusega
		if ($_FILES[$name]["error"] > 0) {
			$_SESSION['notices'][]= "Return Code: " . $_FILES[$name]["error"];
			return "";
		} else {
      // vigu ei ole
			if (file_exists("pildid/" . $_FILES[$name]["name"])) {
        // fail olemas ära uuesti lae, tagasta failinimi
				$_SESSION['notices'][]= $_FILES[$name]["name"] . " juba eksisteerib. ";
				return pathinfo($_FILES[$name]["name"])['filename'];
			} else {
        // kõik ok, aseta pilt
				move_uploaded_file($_FILES[$name]["tmp_name"], "pildid/" . $_FILES[$name]["name"]);
				return pathinfo($_FILES[$name]["name"])['filename'];
			}
		}
	} else {
		return "";
	}
}

?>
