<?php
$sql ="
SELECT  
	(tanggal),
	(proses),
	(shift),
	(item_proses),
	(tipe),
	(satuan),
	sum(IF(DAY(tanggal) = 15, jumlah, 0)) AS jumlah_15,
	sum(IF(DAY(tanggal) = 16, jumlah, 0)) AS jumlah_16,
	sum(IF(DAY(tanggal) = 17, jumlah, 0)) AS jumlah_17,
	sum(IF(DAY(tanggal) = 18, jumlah, 0)) AS jumlah_18,
	sum(IF(DAY(tanggal) = 19, jumlah, 0)) AS jumlah_19,
	sum(IF(DAY(tanggal) = 20, jumlah, 0)) AS jumlah_20,
	sum(IF(DAY(tanggal) = 21, jumlah, 0)) AS jumlah_21,
	
	sum(IF(DAY(tanggal) = 15, jumlah, 0))
	+sum(IF(DAY(tanggal) = 16, jumlah, 0))
	+sum(IF(DAY(tanggal) = 17, jumlah, 0))
	+sum(IF(DAY(tanggal) = 18, jumlah, 0))
	+sum(IF(DAY(tanggal) = 19, jumlah, 0))
	+sum(IF(DAY(tanggal) = 20, jumlah, 0))
	+sum(IF(DAY(tanggal) = 21, jumlah, 0)) AS jumlah_Total
FROM `plan_produksi` WHERE MONTH(tanggal)= '$bln' AND YEAR(tanggal)= '$thn' GROUP BY proses, shift
";
?>