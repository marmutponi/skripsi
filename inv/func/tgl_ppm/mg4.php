<?php
$sql ="
SELECT  
	(tanggal),
	(proses),
	(shift),
	(item_proses),
	(tipe),
	(satuan),
	sum(IF(DAY(tanggal) = 22, jumlah, 0)) AS jumlah_22,
	sum(IF(DAY(tanggal) = 23, jumlah, 0)) AS jumlah_23,
	sum(IF(DAY(tanggal) = 24, jumlah, 0)) AS jumlah_24,
	sum(IF(DAY(tanggal) = 25, jumlah, 0)) AS jumlah_25,
	sum(IF(DAY(tanggal) = 26, jumlah, 0)) AS jumlah_26,
	sum(IF(DAY(tanggal) = 27, jumlah, 0)) AS jumlah_27,
	sum(IF(DAY(tanggal) = 28, jumlah, 0)) AS jumlah_28,
	
	sum(IF(DAY(tanggal) = 22, jumlah, 0))
	+sum(IF(DAY(tanggal) = 23, jumlah, 0))
	+sum(IF(DAY(tanggal) = 24, jumlah, 0))
	+sum(IF(DAY(tanggal) = 25, jumlah, 0))
	+sum(IF(DAY(tanggal) = 26, jumlah, 0))
	+sum(IF(DAY(tanggal) = 27, jumlah, 0))
	+sum(IF(DAY(tanggal) = 28, jumlah, 0)) AS jumlah_Total
FROM `plan_produksi` WHERE MONTH(tanggal)= '$bln' AND YEAR(tanggal)= '$thn' GROUP BY proses, shift
";
?>