<?php

include "koneksi.php";

	$nip = isset($_POST['nip']) ? $_POST['nip'] : '';
    $tanggal = date('Y-m-d');

$sql="SELECT * FROM tb_blok3 WHERE (tanggal IS NULL OR tanggal ='".$tanggal."') AND (nip IS NULL OR nip='".$nip."')";



$query = mysqli_query($con, $sql);

$data = mysqli_fetch_assoc($query);
if(empty($data)){

    $sql="SELECT * FROM tb_pegawai WHERE nip='".$nip."'";

    $query = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($query);
    echo json_encode(array(
        'data'=>array(
        'nip' => $data['nip'],
        'nama' => $data['nama'],
        'status' => 'None',
        )
        
    ));
}else{
    echo json_encode(array(
        'data'=>array(
        'nip' => $data['nip'],
        'nama' => $data['nama_pegawai'],
        'status'=>'Success',
        )
    ));
}
