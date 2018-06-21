	<div id="parts">
    <table align="center" border='1'>
	<tr>
    <th>No.</th>
    <th>Nama Item</th>
    <th><?php echo $label_col3;?></th>
    <th>Satuan</th>
    <th>Jumlah</th>
    <!---<th colspan="2">Operations</th>--->
    </tr>
    <?php
	$query = mysqli_query($conn,"SELECT * FROM ".$tabel_stok."");  
    if( $query=== FALSE ) { trigger_error('Query failed returning error: '. mysql_error(),E_USER_ERROR); }
    while($row=mysqli_fetch_assoc($query))
	
 {
  ?>
        <tr>
        <td><?php echo $row['num']; ?></td>
        <td><?php echo $row['nama_item']; ?></td>
        <td><?php echo $row[''.$tabel_col3.'']; ?></td>
        <td><?php echo $row['satuan']; ?></td>
		
		<script>
		var str1 = <?php echo json_encode($row['jumlah']) ?>;
		var str2 = parseInt(str1);
		if (str2 < 0)
		document.write ('<td style="background-color: red; color:white;">');
		else if (str2 < 20)
		document.write ('<td style="background-color: blue; color:white;">');
		else
		document.write ('<td>');
		</script>
		
        <?php echo $row['jumlah']; ?></td>
        </tr>
        <?php
 }
 ?>
    </table>
	</div>