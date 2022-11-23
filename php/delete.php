<?php 
    $connection = new mysqli("localhost", "root", "", "db_tailor");

    $kodebarang = $_POST['kode_barang'];

    $result = mysqli_query($connection, "DELETE FROM master_barang WHERE kode_barang=".$kodebarang);

    if($result){
        echo json_encode([
            'message' => 'Data delete successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to delete'
        ]);
    }
?>