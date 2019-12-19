<?php 
include 'koneksi.php';
?>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query("SELECT * FROM tb_laundry where username like' %".$cari."%'");
	}else{	
		$data = mysqli_query ($host, "SELECT * FROM tb_laundry");		
	}
	$no = 1;
	while($id = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $id['username']; ?></td>
	</tr>
	<?php } ?>
</table>
