<?php
$date = date('Y-m-d')
?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Hp</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="hp" name="notelpon" placeholder="No notelpon" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kel / Desa</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="kel_desa" name="kel_desa" placeholder="Kel / Desa" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="kec" name="kec" placeholder="Kecamatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kab / kota</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="kab_kota" name="kab_kota" placeholder="Kab / Kota" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="temp_lahir" name="temp_lahir" placeholder="Tempat Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="date" class="form-date" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Join Date</label>
				<div class="col-sm-5">
					<input type="date" class="form-date" id="masuk" name="masuk" placeholder="Join Date"  required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori</label>
				<div class="col-sm-5">
				<select name="kategori" id="kategori" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['kategori'] == "BLOK_1") echo "<option value='BLOK_1' selected>BLOK 1</option>";
                else echo "<option value='BLOK_1'>BLOK 1</option>";

                if ($data_cek['kategori'] == "BLOK_2") echo "<option value='BLOK_2' selected>BLOK 2</option>";
                else echo "<option value='BLOK_2'>BLOK 2</option>";

                if ($data_cek['kategori'] == "BLOK_3") echo "<option value='BLOK_3' selected>BLOK 3</option>";
                else echo "<option value='BLOK_3'>BLOK 3</option>";
				?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Pegawai</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_pegawai (nip, nik, nama, notelpon, alamat, kel_desa, kec, kab_kota, temp_lahir, tgl_lahir, masuk, kategori, foto) VALUES (
            '".$_POST['nip']."',
            '".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['notelpon']."',
			'".$_POST['alamat']."',
			'".$_POST['kel_desa']."',
			'".$_POST['kec']."',
			'".$_POST['kab_kota']."',
			'".$_POST['temp_lahir']."',
			'".$_POST['tgl_lahir']."',
			'".$_POST['masuk']."',
			'".$_POST['kategori']."',
            '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pegawai';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pegawai';
          }
      })</script>";
	}
	}
	// elseif(empty($sumber)){
	// 	echo "<script>
	// 	Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	// 	}).then((result) => {
	// 		if (result.value) {
	// 			window.location = 'index.php?page=add-pegawai';
	// 		}
	// 	})</script>";
	// }
	}
     //selesai proses simpan data
