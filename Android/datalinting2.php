<?php 

include "koneksi.php";
$tanggal = date('Y-m-d');

$query = mysqli_query($con,"SELECT * FROM tb_blok2 where tanggal ='".$tanggal."'");
	
	$list_data = array();
    $nomor = 1;
	
	while($data = mysqli_fetch_assoc($query)){
		$list_data[] = array(
            'no'=>$nomor++,
            'nip'=>$data['nip'],
            'nama_pegawai'=>$data['nama_pegawai'],
            'lt_merah'=>$data['lt_merah'],
            'lt_cokelat'=>$data['lt_cokelat'],
            'lt_hitam'=>$data['lt_hitam'],
            'lt_jawas'=>$data['lt_jawas'],
            'paten'=>$data['paten'],
            'jumlah'=>$data['jumlah'],
        );
    }
    echo json_encode(array(
        'data'=>$list_data
    ));

?>