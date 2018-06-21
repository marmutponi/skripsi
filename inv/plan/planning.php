<?php
require_once '../func/func_dbconfig.php';
session_start();
require '../func/func_logout.php';

if(!isset($_SESSION['username'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="index.php";</script>';
}

if(isset($_POST['btn-save']))
{
 $pro = $_POST['proses'];
 $shf = $_POST['shift'];
 $itm = $_POST['item'];
 $tpe = $_POST['tipe'];
 $stn = $_POST['satuan'];
 $jml = $_POST['jumlah'];
 $user = $_SESSION['username'];
 
    $sql_query = "REPLACE INTO plan_produksi (tanggal, proses, shift, item_proses, tipe, satuan, jumlah, pelapor) VALUES (NOW(), '$pro', '$shf', '$itm', '$tpe', '$stn', '$jml', '$user')";
	
	if($conn->query($sql_query) === TRUE)
	echo "Data baru berhasil disimpan!";
	else	
	echo "Gagal memasukan data";
 header('Location: bulanan.php'); 
}


?>

<html>
<head>
<title>Index</title>
<script>
$(document).ready(function () 
{
    $("table").fixedHeaderTable({footer: true, cloneHeadToFoot: true, fixedColumns: 3 });
    $("table").fixedHeaderTable("show");
});
</script>
<link rel="stylesheet" type="text/css" href="/inv/style.css">
<link rel="stylesheet" type="text/css" href="/inv/defaultTheme.css">
<script type="text/javascript" src="/inv/jquery.min.js"></script>
<script type="text/javascript" src="/inv/jquery.fixedheadertable.min.js"></script>
</head>
<body>
<center>
<div id='body'>
<table width="100%" class="head"><tr>
 <th class="head"><div data-role='header'><h3>Modul Production Plan : Rencanakan</h3></div></th>
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
 Username: <input id='username' type='text' name='username' placeholder='username' />
 Password: <input id='password' type='password' name='password' placeholder='password' />
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
 <a href="planning.php"><button class='button'>Rencanakan Hari Ini</button></a>
 </div><br>

 <div id="content">
	<form method="post">
    <table align="center">
	
	<tr>
    <td>Proses:</td><td><input type="text" name="proses" required /></td>
    </tr>
	
    <tr>
    <td>Shift:</td>
	<td><select name="shift">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	</select></td>
    </tr>
	
    <tr>
    <td>Item Proses:</td><td><input type="text" name="item" required />
	<datalist id="cityname">
	<option value="Boston">
	<option value="Cambridge">
	</datalist></td>
    </tr>
	
    <tr>
    <td>Type/Warna:</td><td><input type="text" name="tipe" required /></td>
    </tr>
	
    <tr>
    <td>Satuan:</td>
	<td><select name="satuan">
	<option value="Pcs">Pcs</option>
	<option value="Set">Set</option>
	<option value="Lbr">Lbr</option>
	<option value="Kg">Kg</option>
	<option value="Mtr">Mtr</option>
	<option value="Yard">Yard</option>
	<option value="Roll">Roll</option>
	</select></td>
    </tr>
	
    <tr>
    <td>Jumlah:</td><td><input type="text" name="jumlah" required /></td>
    </tr>
	
	<tr>
    <td colspan="2"><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
	
    </table>
    </form>
 </div>
</div>
</center>
</body>
</html>