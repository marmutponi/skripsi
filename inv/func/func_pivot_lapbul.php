<?php
$bln = $_POST["bln"];
$thn = $_POST["thn"];
$dibuat = $_POST["dibuat"];
$disetujui = $_POST["disetujui"];
$diketahui = $_POST["diketahui"];

if ($bln == "2") {include '../func/tgl/28.php';}
else if ($bln == "4" OR $bln == "6" OR $bln == "9" OR $bln == "11") {include '../func/tgl/30.php';}
else include '../func/tgl/31.php';

$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

echo 
'
<html>
		<body>
';

$header_row1 = $header_row2 = '';
foreach ($result[0] as $key => $val)
{
	if (strpos($key, 'awal_') !== false)
	{
		$tgl = explode('_', $key);
		$header_row1 .= 
		'
		<th colspan="4">' . $tgl[1] . '</th>
		';
		$header_row2 .= 
		'
		<th>Awal</th>
		<th>Masuk</th>
		<th>Keluar</th>
		<th>Akhir</th>
		';
	}
}

//penomoran dokumen otomatis
if($bln == "1") {$bln_roma = "I"; $bln_teks = "Januari"; $bln_3digit = "01";}
else if($bln == "2") {$bln_roma = "II"; $bln_teks = "Februari"; $bln_3digit = "02";}
else if($bln == "3") {$bln_roma = "III"; $bln_teks = "Maret"; $bln_3digit = "03";}
else if($bln == "4") {$bln_roma = "IV"; $bln_teks = "April"; $bln_3digit = "04";}
else if($bln == "5") {$bln_roma = "V"; $bln_teks = "Mei"; $bln_3digit = "05";}
else if($bln == "6") {$bln_roma = "VI"; $bln_teks = "Juni"; $bln_3digit = "06";}
else if($bln == "7") {$bln_roma = "VII"; $bln_teks = "Juli"; $bln_3digit = "07";}
else if($bln == "8") {$bln_roma = "VIII"; $bln_teks = "Agustus"; $bln_3digit = "08";}
else if($bln == "9") {$bln_roma = "IX"; $bln_teks = "September"; $bln_3digit = "09";}
else if($bln == "10") {$bln_roma = "X"; $bln_teks = "Oktober"; $bln_3digit = $bln;}
else if($bln == "11") {$bln_roma = "XI"; $bln_teks = "November"; $bln_3digit = $bln;}
else {$bln_roma = "XII"; $bln_teks = "Desember"; $bln_3digit = $bln;}

echo 
'
<table border="1" class="table table-striped" id="lapbul">
<thead>
	<tr>
	<th rowspan ="2" colspan ="5">CV.TRIONA MULTI INDUSTRI</th>
	<th colspan ="15">Laporan Bulanan</th>
	<th colspan ="4" style = "font-size: 0.8em; font-weight: lighter; border-bottom: 0px;">DIBUAT</th>
	<th colspan ="4" style = "font-size: 0.8em; font-weight: lighter; border-bottom: 0px;">DISETUJUI</th>
	<th colspan ="4" style = "font-size: 0.8em; font-weight: lighter; border-bottom: 0px;">DIKETAHUI</th>
	</tr>
	<tr>
	<th colspan ="15">Bulan: '.$bln_teks.' '.$thn.'</th>
	<th colspan ="4" style="border-top: 0px;"><br></th>
	<th colspan ="4" style="border-top: 0px;"><br></th>
	<th colspan ="4" style="border-top: 0px;"><br></th>
	</tr>
	<tr>
	<th colspan ="5" style ="text-align:right;">No. Dokumen :</th>
	<th colspan ="15"><i>0'.$bln_3digit.'/LBP-PPIC/00/'.$bln_roma.'/'.substr($thn, -2).'/TMI2</i></th>
	<th colspan ="4">'.$dibuat.'</th>
	<th colspan ="4">'.$disetujui.'</th>
	<th colspan ="4">'.$diketahui.'</th>
	</tr>
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Nama Barang</th>
	<th rowspan="2">'.$label_col3.'</th>
	<th rowspan="2">Satuan</th>
	'. $header_row1 .'
	</tr>
	<tr>
	'. $header_row2 .'
	</tr>
</thead>
<tbody>
';

foreach ($result as $array)
{
		
	foreach ($array as $key => $val)
	{
		echo '<td>' . $val . '</td>';
	}
	echo '</tr>';
}

echo '
</tbody>

</table>
</body>
</html>';
?>