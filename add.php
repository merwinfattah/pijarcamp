<?php
  include "connection.php";
    if(isset($_POST['add'])) {
        $nama_produk=$_POST["nama_produk"];
        $ket=$_POST["keterangan"];
        $harga=$_POST["harga"];
        $jumlah=$_POST["jumlah"];
        $q = " INSERT INTO `produk`(`nama_produk`, `keterangan`, `harga`,  `jumlah`) VALUES ( '$nama_produk', '$ket', '$harga', '$jumlah')";
        $query = mysqli_query($conn,$q);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PijarCamp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    <form name="add_produk" method="post" action="add.php">
        <br><br><div class="card">
        <div class="card-header bg-warning">
        <h1 class="text-white text-center">  Add Product</h1>
        </div><br>

        <label> Nama Product: </label>
        <input type="text" name="nama_produk" class="form-control"> <br>

        <label> Keterangan: </label>
        <input type="text" name="keterangan" class="form-control"> <br>

        <label> Harga: </label>
        <input type="number" name="harga"  class="form-control"> <br>

        <label> Jumlah: </label>
        <input type="number" name="jumlah" class="form-control"> <br>

        <input class="btn btn-success" type="submit" name="add" value="add"><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

        </div>
    </form>  
    
</body>
</html>