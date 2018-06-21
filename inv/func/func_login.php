<!--redirect ke index jika diakses tanpa login-->
<?php
include_once 'func_dbconfig.php';
session_start();
?>

<!--konfirmasi username & password, kemudian menentukan session login-->
<?php
if (isset($_POST['submit']))
{

$username = mysqli_real_escape_string($conn,htmlentities($_POST['username']));
$password = mysqli_real_escape_string($conn,htmlentities($_POST['password']));

$sql = mysqli_query($conn,"SELECT * from acc WHERE username='$username' and password='$password'") or die(mysql_error());
if(mysqli_num_rows($sql) == 0)
	{
	echo '<script language="javascript">alert("Username atau password salah!"); document.location="index.php";</script>';
	}
else
	{
	$_SESSION['username'] = $username;
	echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="index.php";</script>';
	}
	
}

?>