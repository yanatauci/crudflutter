<?php 
    $connection = new mysqli("localhost","root","","db_tailor");
    $data       = mysqli_query($connection, "SELECT * FROM master_barang");
    $data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data);
?>