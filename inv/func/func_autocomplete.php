<?php
require_once '../func/func_dbconfig.php';

$searchTerm = $_GET['term'];

$query = mysqli_query($conn,"SELECT * FROM ".$tabel_stok."");  
$select =mysql_query("SELECT * FROM plan_produksi WHERE name LIKE '%".$searchTerm."%'");
while ($row=mysql_fetch_array($select)) 
{
 $data[] = $row['name'];
}
//return json data
echo json_encode($data);
?>