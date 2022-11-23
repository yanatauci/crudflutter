<?php 
    $connection = new mysqli("localhost","root","","db_tailor");
    $data       = mysqli_query($connection, "SELECT * from master_barang WHERE kode_barang=".$_GET['kode_barang']);
    $data       = mysqli_fetch_array($data, MYSQLI_ASSOC);

    echo json_encode($data);
?>