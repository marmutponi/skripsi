<?php
require_once '../func/func_dbconfig.php';
session_start();
require '../func/func_logout.php';
require 'table.php';
?>

<html>
<head>
<title>Index</title>
<!--
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
--> 
<link rel="stylesheet" type="text/css" href="/inv/style.css">
</head>
<body>
<center>



<div id='body'>
<table width="100%" class="head"><tr>
 <th class="head"><div data-role='header'><h3>Sistem Inventaris Triona Multi Industri - Modul Finished Good</h3></div></th>
 <th class="head">
 <?php 
 if(isset($_SESSION['username'])) 
 {echo "
 <span style='text-align=left;'>Halo, "; echo $_SESSION['username']; echo "!
 <form method='post'><button type='submit' name='btn-logout'><strong>LOGOUT</strong></button></form>
 </span>
 ";} 
 else
 {
 echo
 "
 <span style='text-align=left;'><form action='../func/func_login.php' method='post'>
 Username: <input id='username' type='text' name='username' placeholder='username' required />
 Password: <input id='password' type='password' name='password' placeholder='password' required />
 <input class='btn' type='submit' name='submit' value='Login' />
 </form></span>
 ";}
 ?>
 </th>
</tr>
</table>
 <div id='nav'>
 <a href="/inv/index.php"><button class='button'>Menu Utama</button></a>
 <a href=index.php><button class='button'>Stok Hari Ini</button></a>
 <a href=laporan.php><button class='button'>Laporan Bulanan</button></a>
 <a href=lapor.php><button class='button'>Lapor</button></a>
 <a href=so.php><button class='button'>Stok Opname</button></a>
 </div><br>
 
 <div id="content">
 <?php
 if(isset($_SESSION['username'])) {include 'partlist.php';}
 ?>
 </div>
</div>

</center>
</body>
</html>