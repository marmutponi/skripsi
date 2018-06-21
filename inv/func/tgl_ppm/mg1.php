<?php
$sql ="
SELECT  
	(tanggal),
	(proses),
	(shift),
	(item_proses),
	(tipe),
	(satuan),
	sum(IF(DAY(tanggal) = 1, jumlah, 0)) AS jumlah_1,
	sum(IF(DAY(tanggal) = 2, jumlah, 0)) AS jumlah_2,
	sum(IF(DAY(tanggal) = 3, jumlah, 0)) AS jumlah_3,
	sum(IF(DAY(tanggal) = 4, jumlah, 0)) AS jumlah_4,
	sum(IF(DAY(tanggal) = 5, jumlah, 0)) AS jumlah_5,
	sum(IF(DAY(tanggal) = 6, jumlah, 0)) AS jumlah_6,
	sum(IF(DAY(tanggal) = 7, jumlah, 0)) AS jumlah_7,
	
	sum(IF(DAY(tanggal) = 1, jumlah, 0))
	+sum(IF(DAY(tanggal) = 2, jumlah, 0))
	+sum(IF(DAY(tanggal) = 3, jumlah, 0))
	+sum(IF(DAY(tanggal) = 4, jumlah, 0))
	+sum(IF(DAY(tanggal) = 5, jumlah, 0))
	+sum(IF(DAY(tanggal) = 6, jumlah, 0))
	+sum(IF(DAY(tanggal) = 7, jumlah, 0)) AS jumlah_Total
FROM `plan_produksi` WHERE MONTH(tanggal)= '$bln' AND YEAR(tanggal)= '$thn' GROUP BY proses, shift
";
?>