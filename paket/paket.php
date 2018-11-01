<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>PENGINPUTAN PAKET</h1>

    <form method="post"> 

  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Tanggal datang</label>
      <input type="date" class="form-control" name="tgl_datang">
    </div>
    <div class="form-group col-md-4">
      <label >Sasaran</label>
      <select name="sasaran" class="form-control">
        <option selected value="Abrar">Abrar</option>
        <option value="Ucup">Ucup</option>
      </select>
    </div>
  </div>
  <div class="form-row col-md-6">
    <label>Penerima</label>
    <input type="text" class="form-control" name="penerima">
  </div>
  
  <div class="form-row col-md-6">
    <div class="form-group col-md-6">
      <label >Isi paket</label>
      <input type="text" class="form-control" name="isi_paket">
    </div>
    <div class="form-group col-md-6">
      <label >Tanggal ambil</label>
      <input type="date" class="form-control" name="tgl_ambil">
    </div>
   
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Input</button>

  <a href="list.php">Cek list paket</a>
</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
include"koneksi.php";


if (isset($_POST['submit'])) {
	$tgl_datang = $_POST['tgl_datang'];
	$sasaran 	= $_POST['sasaran'];
	$penerima 	= $_POST['penerima'];
	$isi_paket	= $_POST['isi_paket'];
	$tgl_ambil 	= $_POST['tgl_ambil'];

	$query = mysqli_query($konek, "INSERT INTO paket values ('$tgl_datang', '$sasaran', '$penerima', '$isi_paket', '$tgl_ambil') ");

	if (mysqli_affected_rows($konek)>0) {
		echo "<center>Data berhasil disimpan</center>";
	}else{
		echo "<center>Gagal</center>";
	}
}

 ?>