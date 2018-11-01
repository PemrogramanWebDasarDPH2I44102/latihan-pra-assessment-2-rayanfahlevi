
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>regis</title>
  </head>
  <body>
  <center>
  <div class="card" style="width: 19rem;">
  <img class="card-img-top" src=<?php if(empty($ac['foto'])){echo "gambar/awal.jpg";}else{echo "gambar/".$ac['foto'];}?> >
  <div class="card-body">
  
    <b><p class="card-text">SELAMAT DATANG!</p></b>
    <h5 class="card-title"><?php echo $ac['name']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $ac['email']; ?></h6>
    <a href="profil.php" class="card-link">Profil</a>
    <a href="newdata.php" class="card-link">Data baru</a>
    
  </div>
</div>
<div class="container">
	<div class="row">
        <div class="col-md-12">
        <h2>DATA DIRI</h2>
        <div class="table-responsive">
          

  <a href="index.php" class="card-link">Log out</a>
  </center>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>