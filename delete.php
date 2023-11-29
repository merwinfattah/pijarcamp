<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id_produk = $_GET['id'];
        $sql = "DELETE from `produk` where id=$id_produk";
        $conn->query($sql);
    }
    header('location:/pijarcamp/index.php');
    exit;
?>