<?php error_reporting(0); session_start();
	include "koneksi.php"; ?>
HALO SELAMAT DATANG !! <strong> <?php echo $_SESSION['level']; ?> </strong>
<br/><br/>
<a href="login.php">BACK</a>
