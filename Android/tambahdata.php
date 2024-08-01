<?php
	
	
	include "koneksi.php";
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nip = isset($_POST['nip']) ? $_POST['nip'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$lt_merah = isset($_POST['lt_merah']) ? $_POST['lt_merah'] : '';
	$lt_cokelat = isset($_POST['lt_cokelat']) ? $_POST['lt_cokelat'] : '';
	$lt_hitam = isset($_POST['lt_hitam']) ? $_POST['lt_hitam'] : '';
	$lt_jawas = isset($_POST['lt_jawas']) ? $_POST['lt_jawas'] : '';
	$jumlah = $lt_merah + $lt_cokelat + $lt_hitam + $lt_jawas;
	$paten = isset($_POST['paten']) ? $_POST['paten'] : '';
	// $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
    $tanggal= date('Y-m-d');
	
	if(empty($id)) {
		$query = mysqli_query($con,"INSERT INTO blok1s(`id`,`nip`, `nama`, `lt_merah`, `lt_cokelat`,`lt_hitam`,`lt_jawas`, `jumlah`, `paten`, `tanggal`) VALUES(NULL,'".$nip."','".$nama."','".$lt_merah."','".$lt_cokelat."','".$lt_hitam."','".$lt_jawas."','".$jumlah."','".$paten."', '".$tanggal."');");
		
		if ($query) {
			echo "Data berhasil di simpan";
			
		} else{ 
			echo "Error simpan Data";
			
		}
	}
    else {
		$query = mysqli_query($con,"UPDATE tb_linting set id = '".$id."', nip = '".$nip."', nama = '".$nama."', lt_merah = '".$lt_merah."', lt_cokelat = '".$lt_cokelat."', lt_hitam = '".$lt_hitam."', lt_jawas = '".$lt_jawas."', jumlah = '".$jumlah."', paten = '".$paten."', tanggal = '".$tanggal."' where id = '". $id ."'");
		
		if ($query) {
			echo "Data berhasil di ubah";
			
		} else{ 
			echo "Error ubah Data";
			
		}
		
	}
?>
