<?php
if(isset($_POST['btn-save']))
{

//masukkan ke laporan bulanan	
if($stmt = $conn->prepare("INSERT INTO ".$tabel_laporan." (tanggal, stock_opname, lapor_num, awal, masuk, keluar, akhir, pelapor) VALUES (NOW(), 1, ?, ?, ?, ?, ?,?)"))
{
	$stmt->bind_param('iiiiis', $num, $awal, $masuk, $keluar, $akhir, $_SESSION['username']);

    for($i=0;$i<=count($_POST["numb"]);$i++)
	{
        $num = $_POST["numb"][$i];
        $awal = $_POST["awal"][$i];
        $masuk = $_POST['masuk'][$i];
        $keluar = $_POST['keluar'][$i];
		$akhir = $awal + ($masuk - $keluar);
        $stmt->execute();
    }
}
	
//update stok	
if($stmt2 = $conn->prepare("UPDATE ".$tabel_stok." SET jumlah = (jumlah + ?) WHERE num = ?")) 
{
	$stmt2->bind_param('ii', $stok, $num2);

    for($i=0;$i<=count($_POST["numb2"]);$i++)
	{
        $masuk2 = $_POST['masuk'][$i];
        $keluar2 = $_POST['keluar'][$i];
        $stok = $masuk2 - $keluar2;
        $num2 = $_POST["numb2"][$i];
        $stmt2->execute();
    }
}

if ($stmt->execute() && $stmt2->execute()) 
{
 $stmt->close();
 $stmt2->close();
 header('Location: index.php');
} 

else
{
 $stmt->close();
 $stmt2->close();
 header('Location: index.php');
}

}
?>