<?php
$sql ="
SELECT  
	(tanggal),
	(proses),
	(shift),
	(item_proses),
	(tipe),
	(satuan),
	sum(IF(DAY(tanggal) = 8, jumlah, 0)) AS jumlah_8,
	sum(IF(DAY(tanggal) = 9, jumlah, 0)) AS jumlah_9,
	sum(IF(DAY(tanggal) = 10, jumlah, 0)) AS jumlah_10,
	sum(IF(DAY(tanggal) = 11, jumlah, 0)) AS jumlah_11,
	sum(IF(DAY(tanggal) = 12, jumlah, 0)) AS jumlah_12,
	sum(IF(DAY(tanggal) = 13, jumlah, 0)) AS jumlah_13,
	sum(IF(DAY(tanggal) = 14, jumlah, 0)) AS jumlah_14,
	
	sum(IF(DAY(tanggal) = 8, jumlah, 0))
	+sum(IF(DAY(tanggal) = 9, jumlah, 0))
	+sum(IF(DAY(tanggal) = 10, jumlah, 0))
	+sum(IF(DAY(tanggal) = 11, jumlah, 0))
	+sum(IF(DAY(tanggal) = 12, jumlah, 0))
	+sum(IF(DAY(tanggal) = 13, jumlah, 0))
	+sum(IF(DAY(tanggal) = 14, jumlah, 0)) AS jumlah_Total
FROM `plan_produksi` WHERE MONTH(tanggal)= '$bln' AND YEAR(tanggal)= '$thn' GROUP BY proses, shift
";
?>