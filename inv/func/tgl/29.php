<?php
$sql ="
SELECT  
	(lapor_num),
	(nama_item),
	`".$tabel_col3."`,
	(satuan),
	sum(IF(DAY(tanggal) = 1 && stock_opname = 0, awal, 0)) AS awal_1,
	sum(IF(DAY(tanggal) = 1 && stock_opname = 0, masuk, 0)) AS masuk_1,
	sum(IF(DAY(tanggal) = 1 && stock_opname = 0, keluar, 0)) AS keluar_1,
	sum(IF(DAY(tanggal) = 1 && stock_opname = 0, akhir, 0 )) AS akhir_1,
	
	sum(IF(DAY(tanggal) = 2 && stock_opname = 0, awal, 0)) AS awal_2,
	sum(IF(DAY(tanggal) = 2 && stock_opname = 0, masuk, 0)) AS masuk_2,
	sum(IF(DAY(tanggal) = 2 && stock_opname = 0, keluar, 0)) AS keluar_2,
	sum(IF(DAY(tanggal) = 2 && stock_opname = 0, akhir, 0)) AS akhir_2,
	
	sum(IF(DAY(tanggal) = 3 && stock_opname = 0, awal, 0)) AS awal_3,
	sum(IF(DAY(tanggal) = 3 && stock_opname = 0, masuk, 0)) AS masuk_3,
	sum(IF(DAY(tanggal) = 3 && stock_opname = 0, keluar, 0)) AS keluar_3,
	sum(IF(DAY(tanggal) = 3 && stock_opname = 0, akhir, 0)) AS akhir_3,
	
	sum(IF(DAY(tanggal) = 4 && stock_opname = 0, awal, 0)) AS awal_4,
	sum(IF(DAY(tanggal) = 4 && stock_opname = 0, masuk, 0)) AS masuk_4,
	sum(IF(DAY(tanggal) = 4 && stock_opname = 0, keluar, 0)) AS keluar_4,
	sum(IF(DAY(tanggal) = 4 && stock_opname = 0, akhir, 0)) AS akhir_4,
	
	sum(IF(DAY(tanggal) = 5 && stock_opname = 0, awal, 0)) AS awal_5,
	sum(IF(DAY(tanggal) = 5 && stock_opname = 0, masuk, 0)) AS masuk_5,
	sum(IF(DAY(tanggal) = 5 && stock_opname = 0, keluar, 0)) AS keluar_5,
	sum(IF(DAY(tanggal) = 5 && stock_opname = 0, akhir, 0)) AS akhir_5,
	
	sum(IF(DAY(tanggal) = 6 && stock_opname = 0, awal, 0)) AS awal_6,
	sum(IF(DAY(tanggal) = 6 && stock_opname = 0, masuk, 0)) AS masuk_6,
	sum(IF(DAY(tanggal) = 6 && stock_opname = 0, keluar, 0)) AS keluar_6,
	sum(IF(DAY(tanggal) = 6 && stock_opname = 0, akhir, 0)) AS akhir_6,
	
	sum(IF(DAY(tanggal) = 7 && stock_opname = 0, awal, 0)) AS awal_7,
	sum(IF(DAY(tanggal) = 7 && stock_opname = 0, masuk, 0)) AS masuk_7,
	sum(IF(DAY(tanggal) = 7 && stock_opname = 0, keluar, 0)) AS keluar_7,
	sum(IF(DAY(tanggal) = 7 && stock_opname = 0, akhir, 0)) AS akhir_7,
	
	sum(IF(DAY(tanggal) = 8 && stock_opname = 0, awal, 0)) AS awal_8,
	sum(IF(DAY(tanggal) = 8 && stock_opname = 0, masuk, 0)) AS masuk_8,
	sum(IF(DAY(tanggal) = 8 && stock_opname = 0, keluar, 0)) AS keluar_8,
	sum(IF(DAY(tanggal) = 8 && stock_opname = 0, akhir, 0)) AS akhir_8,
	
	sum(IF(DAY(tanggal) = 9 && stock_opname = 0, awal, 0)) AS awal_9,
	sum(IF(DAY(tanggal) = 9 && stock_opname = 0, masuk, 0)) AS masuk_9,
	sum(IF(DAY(tanggal) = 9 && stock_opname = 0, keluar, 0)) AS keluar_9,
	sum(IF(DAY(tanggal) = 9 && stock_opname = 0, akhir, 0)) AS akhir_9,
	
	sum(IF(DAY(tanggal) = 10 && stock_opname = 0, awal, 0)) AS awal_10,
	sum(IF(DAY(tanggal) = 10 && stock_opname = 0, masuk, 0)) AS masuk_10,
	sum(IF(DAY(tanggal) = 10 && stock_opname = 0, keluar, 0)) AS keluar_10,
	sum(IF(DAY(tanggal) = 10 && stock_opname = 0, akhir, 0)) AS akhir_10,
	
	sum(IF(DAY(tanggal) = 11 && stock_opname = 0, awal, 0)) AS awal_11,
	sum(IF(DAY(tanggal) = 11 && stock_opname = 0, masuk, 0)) AS masuk_11,
	sum(IF(DAY(tanggal) = 11 && stock_opname = 0, keluar, 0)) AS keluar_11,
	sum(IF(DAY(tanggal) = 11 && stock_opname = 0, akhir, 0)) AS akhir_11,
	
	sum(IF(DAY(tanggal) = 12 && stock_opname = 0, awal, 0)) AS awal_12,
	sum(IF(DAY(tanggal) = 12 && stock_opname = 0, masuk, 0)) AS masuk_12,
	sum(IF(DAY(tanggal) = 12 && stock_opname = 0, keluar, 0)) AS keluar_12,
	sum(IF(DAY(tanggal) = 12 && stock_opname = 0, akhir, 0)) AS akhir_12,
	
	sum(IF(DAY(tanggal) = 13 && stock_opname = 0, awal, 0)) AS awal_13,
	sum(IF(DAY(tanggal) = 13 && stock_opname = 0, masuk, 0)) AS masuk_13,
	sum(IF(DAY(tanggal) = 13 && stock_opname = 0, keluar, 0)) AS keluar_13,
	sum(IF(DAY(tanggal) = 13 && stock_opname = 0, akhir, 0)) AS akhir_13,
	
	sum(IF(DAY(tanggal) = 14 && stock_opname = 0, awal, 0)) AS awal_14,
	sum(IF(DAY(tanggal) = 14 && stock_opname = 0, masuk, 0)) AS masuk_14,
	sum(IF(DAY(tanggal) = 14 && stock_opname = 0, keluar, 0)) AS keluar_14,
	sum(IF(DAY(tanggal) = 14 && stock_opname = 0, akhir, 0)) AS akhir_14,
	
	sum(IF(DAY(tanggal) = 15 && stock_opname = 0, awal, 0)) AS awal_15,
	sum(IF(DAY(tanggal) = 15 && stock_opname = 0, masuk, 0)) AS masuk_15,
	sum(IF(DAY(tanggal) = 15 && stock_opname = 0, keluar, 0)) AS keluar_15,
	sum(IF(DAY(tanggal) = 15 && stock_opname = 0, akhir, 0)) AS akhir_15,
	
	sum(IF(DAY(tanggal) = 16 && stock_opname = 0, awal, 0)) AS awal_16,
	sum(IF(DAY(tanggal) = 16 && stock_opname = 0, masuk, 0)) AS masuk_16,
	sum(IF(DAY(tanggal) = 16 && stock_opname = 0, keluar, 0)) AS keluar_16,
	sum(IF(DAY(tanggal) = 16 && stock_opname = 0, akhir, 0)) AS akhir_16,
	
	sum(IF(DAY(tanggal) = 17 && stock_opname = 0, awal, 0)) AS awal_17,
	sum(IF(DAY(tanggal) = 17 && stock_opname = 0, masuk, 0)) AS masuk_17,
	sum(IF(DAY(tanggal) = 17 && stock_opname = 0, keluar, 0)) AS keluar_17,
	sum(IF(DAY(tanggal) = 17 && stock_opname = 0, akhir, 0)) AS akhir_17,
	
	sum(IF(DAY(tanggal) = 18 && stock_opname = 0, awal, 0)) AS awal_18,
	sum(IF(DAY(tanggal) = 18 && stock_opname = 0, masuk, 0)) AS masuk_18,
	sum(IF(DAY(tanggal) = 18 && stock_opname = 0, keluar, 0)) AS keluar_18,
	sum(IF(DAY(tanggal) = 18 && stock_opname = 0, akhir, 0)) AS akhir_18,
	
	sum(IF(DAY(tanggal) = 19 && stock_opname = 0, awal, 0)) AS awal_19,
	sum(IF(DAY(tanggal) = 19 && stock_opname = 0, masuk, 0)) AS masuk_19,
	sum(IF(DAY(tanggal) = 19 && stock_opname = 0, keluar, 0)) AS keluar_19,
	sum(IF(DAY(tanggal) = 19 && stock_opname = 0, akhir, 0)) AS akhir_19,
	
	sum(IF(DAY(tanggal) = 20 && stock_opname = 0, awal, 0)) AS awal_20,
	sum(IF(DAY(tanggal) = 20 && stock_opname = 0, masuk, 0)) AS masuk_20,
	sum(IF(DAY(tanggal) = 20 && stock_opname = 0, keluar, 0)) AS keluar_20,
	sum(IF(DAY(tanggal) = 20 && stock_opname = 0, akhir, 0)) AS akhir_20,
	
	sum(IF(DAY(tanggal) = 21 && stock_opname = 0, awal, 0)) AS awal_21,
	sum(IF(DAY(tanggal) = 21 && stock_opname = 0, masuk, 0)) AS masuk_21,
	sum(IF(DAY(tanggal) = 21 && stock_opname = 0, keluar, 0)) AS keluar_21,
	sum(IF(DAY(tanggal) = 21 && stock_opname = 0, akhir, 0)) AS akhir_21,
	
	sum(IF(DAY(tanggal) = 22 && stock_opname = 0, awal, 0)) AS awal_22,
	sum(IF(DAY(tanggal) = 22 && stock_opname = 0, masuk, 0)) AS masuk_22,
	sum(IF(DAY(tanggal) = 22 && stock_opname = 0, keluar, 0)) AS keluar_22,
	sum(IF(DAY(tanggal) = 22 && stock_opname = 0, akhir, 0)) AS akhir_22,
	
	sum(IF(DAY(tanggal) = 23 && stock_opname = 0, awal, 0)) AS awal_23,
	sum(IF(DAY(tanggal) = 23 && stock_opname = 0, masuk, 0)) AS masuk_23,
	sum(IF(DAY(tanggal) = 23 && stock_opname = 0, keluar, 0)) AS keluar_23,
	sum(IF(DAY(tanggal) = 23 && stock_opname = 0, akhir, 0)) AS akhir_23,
	
	sum(IF(DAY(tanggal) = 24 && stock_opname = 0, awal, 0)) AS awal_24,
	sum(IF(DAY(tanggal) = 24 && stock_opname = 0, masuk, 0)) AS masuk_24,
	sum(IF(DAY(tanggal) = 24 && stock_opname = 0, keluar, 0)) AS keluar_24,
	sum(IF(DAY(tanggal) = 24 && stock_opname = 0, akhir, 0)) AS akhir_24,
	
	sum(IF(DAY(tanggal) = 25 && stock_opname = 0, awal, 0)) AS awal_25,
	sum(IF(DAY(tanggal) = 25 && stock_opname = 0, masuk, 0)) AS masuk_25,
	sum(IF(DAY(tanggal) = 25 && stock_opname = 0, keluar, 0)) AS keluar_25,
	sum(IF(DAY(tanggal) = 25 && stock_opname = 0, akhir, 0)) AS akhir_25,
	
	sum(IF(DAY(tanggal) = 26 && stock_opname = 0, awal, 0)) AS awal_26,
	sum(IF(DAY(tanggal) = 26 && stock_opname = 0, masuk, 0)) AS masuk_26,
	sum(IF(DAY(tanggal) = 26 && stock_opname = 0, keluar, 0)) AS keluar_26,
	sum(IF(DAY(tanggal) = 26 && stock_opname = 0, akhir, 0)) AS akhir_26,
	
	sum(IF(DAY(tanggal) = 27 && stock_opname = 0, awal, 0)) AS awal_27,
	sum(IF(DAY(tanggal) = 27 && stock_opname = 0, masuk, 0)) AS masuk_27,
	sum(IF(DAY(tanggal) = 27 && stock_opname = 0, keluar, 0)) AS keluar_27,
	sum(IF(DAY(tanggal) = 27 && stock_opname = 0, akhir, 0)) AS akhir_27,
	
	sum(IF(DAY(tanggal) = 28 && stock_opname = 0, awal, 0)) AS awal_28,
	sum(IF(DAY(tanggal) = 28 && stock_opname = 0, masuk, 0)) AS masuk_28,
	sum(IF(DAY(tanggal) = 28 && stock_opname = 0, keluar, 0)) AS keluar_28,
	sum(IF(DAY(tanggal) = 28 && stock_opname = 0, akhir, 0)) AS akhir_28,
	
	sum(IF(DAY(tanggal) = 29 && stock_opname = 0, awal, 0)) AS awal_29,
	sum(IF(DAY(tanggal) = 29 && stock_opname = 0, masuk, 0)) AS masuk_29,
	sum(IF(DAY(tanggal) = 29 && stock_opname = 0, keluar, 0)) AS keluar_29,
	sum(IF(DAY(tanggal) = 29 && stock_opname = 0, akhir, 0)) AS akhir_29,
	
	sum(IF(stock_opname = 1, awal, 0)) AS awal_SO,
	sum(IF(stock_opname = 1, masuk, 0)) AS masuk_SO,
	sum(IF(stock_opname = 1, keluar, 0)) AS keluar_SO,
	sum(IF(stock_opname = 1, akhir, 0)) AS akhir_SO,
	
	sum(IF(MONTH(tanggal) = '$bln', awal, 0)) AS awal_Total,
	sum(IF(MONTH(tanggal) = '$bln', masuk, 0)) AS masuk_Total,
	sum(IF(MONTH(tanggal) = '$bln', keluar, 0)) AS keluar_Total,
	sum(IF(DAY(tanggal) = 1, awal, 0))+sum(IF(MONTH(tanggal) = '$bln', masuk, 0))-sum(IF(MONTH(tanggal) = '$bln', keluar, 0)) AS akhir_Total
FROM `".$tabel_laporan."` LEFT OUTER JOIN `".$tabel_stok."` ON `".$tabel_laporan."`.lapor_num=`".$tabel_stok."`.num
WHERE MONTH(tanggal)= '$bln' AND YEAR(tanggal)= '$thn'
GROUP BY lapor_num
";
?>