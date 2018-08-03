<?php
$host = "192.168.43.227:7306" ;
$user = "root" ;
$pass = "tulung" ;
$db	  = "tcc" ;

$konek = mysqli_connect($host,$user,$pass,$db) ;

if(!$konek){
	 die("Connection failed: " . mysqli_connect_error());
}
/*
else{
	echo "Koneksi sukses <hr/>" ;
}
*/

?>