<?php
  include "connection.php";
  $id="";
  $nama_produk="";
  $ket="";
  $harga=0;
  $jumlah=0;

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:/pijarcamp/index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from produk where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:/pijarcamp/index.php");
      exit;
    }
    $nama_produk=$row["nama_produk"];
    $ket=$row["keterangan"];
    $harga=$row["harga"];
    $jumlah=$row["jumlah"];

  }
  else {
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama_produk=$_POST["nama_produk"];
        $ket=$_POST["keterangan"];
        $harga=$_POST["harga"];
        $jumlah=$_POST["jumlah"];

        $sql = "update produk set nama_produk='$nama_produk', keterangan='$ket', harga='$harga', jumlah='$jumlah' where id='$id'";
        $result = $conn->query($sql);

    }
    
  }
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PijarCamp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PijarCamp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="add.php">Add Product</a>
            </div>
        </div>
    </nav>
    <form name="update_produk" method="post" action="edit.php">
        <br><br><div class="card">
        <div class="card-header bg-warning">
        <h1 class="text-white text-center">  Update Product</h1>
        </div><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

        <label> Nama Product: </label>
        <input type="text" name="nama_produk" value="<?php echo $nama_produk; ?>" class="form-control"> <br>

        <label> Keterangan: </label>
        <input type="text" name="keterangan" value="<?php echo $ket; ?>" class="form-control"> <br>

        <label> Harga: </label>
        <input type="number" name="harga" value="<?php echo $harga; ?>" class="form-control"> <br>

        <label> Jumlah: </label>
        <input type="number" name="jumlah" value="<?php echo $jumlah; ?>" class="form-control"> <br>

        <input class="btn btn-success" type="submit" name="update" value="update"><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

        </div>
    </form>  
</body>
</html>