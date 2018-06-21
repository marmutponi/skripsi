<?php
$sql ="
SELECT  
	(tanggal),
	(proses),
	(shift),
	(item_proses),
	(tipe),
	(satuan),
	sum(IF(DAY(tanggal) = 29, jumlah, 0)) AS jumlah_29,
	sum(IF(DAY(tanggal) = 29, jumlah, 0)) AS jumlah_Total
FROM `plan_produksi` WHERE MONTH(tanggal)= '$bln' AND YEAR(tanggal)= '$thn' GROUP BY proses, shift
";
?>