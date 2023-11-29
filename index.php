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
    <table class="table">
  <thead>
    <tr>
      <th scope="col">nama_produk</th>
      <th scope="col">keterangan</th>
      <th scope="col">harga</th>
      <th scope="col">jumlah</th>
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
    <?php
        include "connection.php";
        $sql = "select * from produk";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th scope='row'>$row[nama_produk]</th>
        <td>$row[keterangan]</td>
        <td>$row[harga]</td>
        <td>$row[jumlah]</td>
        <td>
            <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
            <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
        </td>
      </tr>
      ";
        }
      ?>
  </tbody>
</table>
    
</body>
</html>