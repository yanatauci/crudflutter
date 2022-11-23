<?php 
    $connection = new mysqli("localhost", "root", "", "db_tailor");
    $kodebarang      = $_POST['kode_barang']; 
    $namabarang    = $_POST['nama_barang'];
    $harga         = $_POST['harga'];
        
    $result = mysqli_query($connection, "UPDATE master_barang SET nama_barang='$namabarang', harga='$harga' WHERE kode_barang='$kode_barang'");
        
    if($result){
        echo json_encode([
            'message' => 'Data edit successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to update'
        ]);
    }
?>