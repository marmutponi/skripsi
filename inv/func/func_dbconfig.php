<?php
$conn=mysqli_connect("localhost","root","","inv");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  
date_default_timezone_set('Asia/Jakarta');
$tanggalini = date('d');
$bulanini =   date('m');
$tahunini =	  date('Y');
?>