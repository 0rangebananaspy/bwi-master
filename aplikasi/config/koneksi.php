<?php 
    //php5
	$host = "10.10.10.49:49154"; 
	$username = "root"; 
	$password = "techiesX007"; 
	$database = "sim";
	mysql_connect($host,$username,$password) or die ("Harap Periksa Koneksi Database Anda!");
	mysql_select_db($database) or die ("Database Tidak Ditemukan!");
	//php7
	//$mysql_hostname="localhost";
	//$mysql_username="root";
	//$mysql_password="";
	//$mysql_dbname="bwi";
	//mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_dbname);
	//$con = mysqli_connect('localhost', 'root', '', 'bwi');
?>
