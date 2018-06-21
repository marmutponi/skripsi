<?php
require_once 'func/func_dbconfig.php';
session_start();
require 'func/func_logout.php';
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
 <th class="head"><div data-role='header'><h3>Sistem Inventaris Triona Multi Industri</h3></div></th>
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
 <span style='text-align=left;'><form action='func/func_login.php' method='post'>
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
 <a href="index.php"><button class='button'>Menu Utama</button></a>
 <a href="/inv/plan/bulanan.php"><button class='button'>Plan Produksi</button></a>
 <a href="lapbul.php"><button class='button'>Laporan Bulanan Inventaris</button></a>
 <?php 
 if(isset($_SESSION['username'])) 
 {echo "
 <a href='backup.php'><button class='button'>Backup Database</button></a>
 ";}
 ?>
 </div><br>
 
 <div id="content">
 <h1 style="font-family: sans-serif;">Selamat datang di Sistem Inventaris Triona Multi Industri!</h1>
 </div>
</div>

</center>
</body>
</html>