<?php

// panggil fungsi validasi xss dan injection
// require_once('fungsi_validasi.php');

$sdb =  "localhost";
// $udb = "rayauser";
// $pdb = "!rayaMedia@2019";
$udb = "root";
$pdb = "";
$db = "rpdb";

// Koneksi dan memilih database di server
//mysqli_connect($server,$username,$password) or die(header('Location: index.php'));
//mysql_select_db($database) or die(header('Location: index.php'));

global $kon;
$kon = mysqli_connect($sdb,$udb,$pdb,$db);
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>