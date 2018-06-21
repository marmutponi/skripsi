<?php
require_once '../func/func_dbconfig.php';
require_once '../func/func_backup.php';
session_start();
require '../func/func_logout.php';

if(!isset($_SESSION['username'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="index.php";</script>';
}

if (empty($_POST["bln"])) {$_POST["bln"] = $bulanini;}
else $_POST["bln"] = $_POST["bln"];
if (empty($_POST["thn"])) {$_POST["thn"] = $tahunini;}
else $_POST["thn"] = $_POST["thn"];
if (empty($_POST["dibuat"])) {$_POST["dibuat"] = " ";}
else $_POST["dibuat"] = $_POST["dibuat"];
if (empty($_POST["disetujui"])) {$_POST["disetujui"] = " ";}
else $_POST["disetujui"] = $_POST["disetujui"];
if (empty($_POST["diketahui"])) {$_POST["diketahui"] = " ";}
else $_POST["diketahui"] = $_POST["diketahui"];


?>

<html>
<head>
<title>Index</title>
<link rel="stylesheet" type="text/css" href="/inv/style.css">
<link rel="stylesheet" type="text/css" href="/inv/defaultTheme.css">

<script type="text/javascript" src="/inv/jquery.min.js"></script>
<script type="text/javascript" src="/inv/func/tableExport.js"></script>
<script type="text/javascript" src="/inv/func/jquery.base64.js"></script>
<script type="text/javascript" src="/inv/func/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="/inv/func/jspdf/jspdf.js"></script>
<script type="text/javascript" src="/inv/func/jspdf/libs/base64.js"></script>
</head>
<body>
<center>
<div id='body'>
<table width="100%" class="head"><tr>
 <th class="head"><div data-role='header'><h3>Modul Production Plan Bulanan</h3></div></th>
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
 <span style='text-align=left;'><form action='login.php' method='post'>
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
 <a href="bulanan.php"><button class='button'>Plan Bulanan</button></a>
 <a href="mingguan.php"><button class='button'>Plan Mingguan</button></a>
 <a href="harian.php"><button class='button'>Plan Harian</button></a>
 <a href="planning.php"><button class='button'>Rencanakan Hari Ini</button></a>
 </div><br>

 <div id="content">
  <form action="bulanan.php" method="post">
  <table style = "border: 0px;">
  <tr>
  <td>Bulan:</td>
  <td>Tahun:</td>
  <td>Dibuat</td>
  <td>Disetujui</td>
  <td>Diketahui</td>
  <td rowspan="2"><input type="submit" value="OK"></td>
  <td rowspan="2"><input type="submit" onClick ="$('#lapbul').tableExport({type:'excel',escape:'false'});" value="SAVE"></td>
  </tr>
  <tr>
  <td><select name="bln">
  <option value="1" <?php if($_POST['bln']=="1") echo "selected=\"selected\""; ?>>Januari</option>
  <option value="2" <?php if($_POST['bln']=="2") echo "selected=\"selected\""; ?>>Februari</option>
  <option value="3" <?php if($_POST['bln']=="3") echo "selected=\"selected\""; ?>>Maret</option>
  <option value="4" <?php if($_POST['bln']=="4") echo "selected=\"selected\""; ?>>April</option>
  <option value="5" <?php if($_POST['bln']=="5") echo "selected=\"selected\""; ?>>Mei</option>
  <option value="6" <?php if($_POST['bln']=="6") echo "selected=\"selected\""; ?>>Juni</option>
  <option value="7" <?php if($_POST['bln']=="7") echo "selected=\"selected\""; ?>>Juli</option>
  <option value="8" <?php if($_POST['bln']=="8") echo "selected=\"selected\""; ?>>Agustus</option>
  <option value="9" <?php if($_POST['bln']=="9") echo "selected=\"selected\""; ?>>September</option>
  <option value="10" <?php if($_POST['bln']=="10") echo "selected=\"selected\""; ?>>Oktober</option>
  <option value="11" <?php if($_POST['bln']=="11") echo "selected=\"selected\""; ?>>November</option>
  <option value="12" <?php if($_POST['bln']=="12") echo "selected=\"selected\""; ?>>Desember</option>
  </select></td>
  <td><select name="thn">
  <option value="2017" <?php if($_POST['thn']=="2017") echo "selected=\"selected\""; ?>>2017</option>
  <option value="2018" <?php if($_POST['thn']=="2018") echo "selected=\"selected\""; ?>>2018</option>
  <option value="2019" <?php if($_POST['thn']=="2019") echo "selected=\"selected\""; ?>>2019</option>
  <option value="2020" <?php if($_POST['thn']=="2020") echo "selected=\"selected\""; ?>>2020</option>
  </select></td>
  <td><input type="text" name="dibuat"></td>
  <td><input type="text" name="disetujui"></td>
  <td><input type="text" name="diketahui"></td>
  </tr>
  </table>
 </form>

 <?php include '../func/func_pivot_pp.php'; ?>
 </div>
</div>
</center>
</body>
</html>