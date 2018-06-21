<?php
if(isset($_POST['btn-logout']))
{
session_destroy();
echo '<script language="javascript">alert("Anda berhasil Logout!"); document.location="index.php";</script>';
}
?>