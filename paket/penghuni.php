<form method="post">
	Nama : <input type="text" name="penghuni"><br>
	Unit : 	<select name="unit">
				<option value="Gd 1">Gd 1</option>
				<option value="Gd 2">Gd 2</option>
				<option value="Gd 3">Gd 3</option>
				<option value="Gd 4">Gd 4</option>
				<option value="Gd 5">Gd 5</option>
			</select><br>
	Ktp	: <input type="text" name="ktp"><br>
	<input type="submit" name="submit">
	
</form>

<?php  
include"koneksi.php";

if (isset($_POST['submit'])) {
	$penghuni	= $_POST['penghuni'];
	$unit 		= $_POST['unit'];
	$ktp 		= $_POST['ktp'];

	$query = mysqli_query($konek, "INSERT INTO penghuni values('$penghuni', '$unit', 'ktp') ");
	if ($query) {
		echo "<center> Data berhasil disimpan</center>";
	}else{
		echo "<center>Gagal</center>";
	}

 }
?>

<form method="post">
	<hr>
	<input type="text" name="cari"><button type="submit">Cari</button>
</form>

<?php 
echo "<table border='1'>";
echo "	<tr>
			<th>Nama</th>
			<th>Unit</th>		
			<th>KTP</th>
			<th>Aksi</th>
		</tr>";
$tampil;
if (isset($_POST['cari'])) {
	$cari = $_POST['cari'];
	$tampil = mysqli_query($konek, "SELECT * FROM penghuni WHERE ktp like '%$cari%' ");
}else{
	$tampil = mysqli_query($konek, "SELECT * FROM penghuni");

}

if (isset($_GET['ktp'])) {
	$ktp = $_GET['ktp'];
	$del = mysqli_query($konek, "DELETE FROM penghuni WHERE ktp = $ktp");
	if ($del) {
		header("Location:penghuni.php");
	}
}

while ($cc = mysqli_fetch_array($tampil)) {

?>
		<tr>
			<td><?php echo $cc['nama']; ?></td>
			<td><?php echo $cc['unit']; ?></td>
			<td><?php echo $cc['ktp']; ?></td>
			<td><?php echo "<a href=penghuni.php?ktp=".$cc['ktp'].">Delete</a>"; ?></td>
		</tr>

<?php 

} echo "</table>";?>