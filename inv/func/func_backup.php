<?php
if(isset($_POST['btn-dump']))
{
   $table_name = "gojek_laporan";
   $backup_file  = "D:\xampp\htdocs\inv\backup\table_".$table_name."_".date("Y-m-d_H-i-s").".sql";
   $baccup = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   $result = mysqli_query($conn,$baccup);
}
?>