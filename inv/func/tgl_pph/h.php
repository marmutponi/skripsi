<?php
$sql ="
SELECT  
	(tanggal),
	(proses),
	(shift),
	(item_proses),
	(tipe),
	(satuan),
	sum(IF(DAY(tanggal) = '$tgl', jumlah, 0)) AS jumlah_'$tgl',
FROM `plan_produksi` WHERE MONTH(tanggal)= '$bln' AND YEAR(tanggal)= '$thn' GROUP BY proses
";
?>