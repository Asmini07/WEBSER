<?php 
	include "koneksi.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = mysql_query("SELECT * FROM 
		tb_login
	WHERE username = '".$username."' 
	AND password = '".$password."' ") or die (mysql_error()); 
			
	if(mysql_num_rows($sql) == 0){
		echo '<script language = "javascript">
		alert("Username dan Password Salah! Silahkan Login Kembali."); 
		document.location="login.php";</script>';
	}else{
		$qry = mysql_fetch_array($sql) or die (mysql_error());
		
		$_SESSION['username'] = $qry['username'];
		$_SESSION['level'] = $qry['level'];
		
		echo '<script language = "javascript">
		alert("Anda berhasil Login!."); document.location="halaman.php";</script>';
	}
?>