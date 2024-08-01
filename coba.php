<?php 
	include "inc/koneksi.php";
    

    $query = mysqli_query($koneksi,"SELECT * FROM tb_pegawai where kategori='BLOK_1'");

	
	// while ($data2= $lin->fetch_assoc($lin)) { 
	// 	$data2['jumlah'];}
	
	$tanggal = '12-02-2024';
	$list_data = array();
    $no = 1;
	
	while($data = mysqli_fetch_assoc($query)){
		$lin = $koneksi->query("SELECT * FROM tb_blok1 where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
		$data2= $lin->fetch_assoc();
		if(empty($data2['jumlah'])){
			$jum='kosong';
		}else{
			$jum=$data2['jumlah'];
		}
		$list_data[] = array(
            'no'=>$no++,
            'nip'=>$data['nip'],
            'nama'=>$data['nama'],
			'jumlah'=>$jum
			
        );
	}
	
	echo json_encode(array(
        'data'=>$list_data
    ));

?>