<?php 
	include "koneksi.php";
    
    $query = mysqli_query($con,"SELECT * FROM pekerjas where kategori='BLOK_2'");
	
    $tanggal= date('Y-m-d');
	$list_data = array();
    $no = 1;
	
	while($data = mysqli_fetch_assoc($query)){
        $lin = $con->query("SELECT * FROM blok1s where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
		$data2= $lin->fetch_assoc();
		if(empty($data2['jumlah'])){
			$jum='kosong';
		}else{
			$jum='Data Sudah Dinput jumlah:'.$data2['jumlah'];
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