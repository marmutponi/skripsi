<?php
require_once '../func/func_dbconfig.php';
session_start();
require '../func/func_logout.php';
require 'table.php';

if(!isset($_SESSION['username'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="index.php";</script>';
}

require '../func/func_so.php';

?>

<html>
<head>
<title>Index</title>
<link rel="stylesheet" type="text/css" href="/inv/style.css">
</head>
<body>
<center>



<div id='body'>
<table width="100%" class="head"><tr>
 <th class="head"><div data-role='header'><h3>Modul Finished Good - Stok Opname</h3></div></th>
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
 <a href=index.php><button class='button'>Stok Hari Ini</button></a>
 <a href=laporan.php><button class='button'>Laporan Bulanan</button></a>
 <a href=lapor.php><button class='button'>Lapor</button></a>
 <a href=so.php><button class='button'>Stok Opname</button></a>
 </div><br>
 
 <div id="content">
	
	<form method="post">
	<div id="parts">
	<table width="600" align="center" border="1" cellspacing="1" cellpadding="0">

	<tr>
    <th>No.</th>
    <th>Nama Item</th>
    <th><?php echo $label_col3;?></th>
    <th>Masuk</th>
    <th>Keluar</th>
	</tr>

	<?php
	$query = mysqli_query($conn,"SELECT * FROM ".$tabel_stok."");  
    if( $query=== FALSE ) { trigger_error('Query failed returning error: '. mysql_error(),E_USER_ERROR); }
	$rowcount = mysqli_num_rows($query);
    while($row=mysqli_fetch_assoc($query))
	{
	?>
	<tr>
	<td align="center">
	<input type="hidden" name="numb[]" value="<?php echo $row['num']; ?>"> <?php echo $row['num']; ?>
	<input type="hidden" name="numb2[]" value="<?php echo $row['num']; ?>">
	<input type="hidden" name="nama[]" value="<?php echo $row['nama_item']; ?>">
	<input type="hidden" name="proses[]" value="<?php echo $row[''.$tabel_col3.'']; ?>">
	<input type="hidden" name="satuan[]" value="<?php echo $row['satuan']; ?>">
	<input type="hidden" name="awal[]" value="<?php echo $row['jumlah']; ?>">
	</td>
	<td align="center">
	<?php echo $row['nama_item']; ?>
	</td>
	<td align="center">
	<?php echo $row[''.$tabel_col3.'']; ?>
	</td>
	<td align="center">
	<input name="masuk[]" type="text" id="masuk" value="0" size="4"> <?php echo $row['satuan']; ?>
	</td>
	<td align="center">
	<input name="keluar[]" type="text" id="keluar" value="0" size="4"> <?php echo $row['satuan']; ?>
	</td>
	</tr>
	<?php
	}
	?>
	
	<tr>
    <td colspan = "5" align="center"><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
	</tr>
	</table>
	</div>
	</form>
	
 </div>
</div>

</center>
</body>
</html>