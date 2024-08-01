<?php

        $sql_cek = "SELECT * FROM tb_profil";
        $query_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
		{
		$date = date('l, d-m-Y');
		$datetok = date('d-m-Y');

		
?>
<!-- <div class="container">
	<p class="text-right"><?php echo $datetok; ?></p>
</div> -->
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-flag"></i> Profil Perusahaan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nama_profil" name="nama_profil" value="<?php echo $data_cek['nama_profil']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bidang</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="bidang" name="bidang" value="<?php echo $data_cek['bidang']; ?>"
					 readonly/>
				</div>
			</div>

		</div>
	</form>
</div>

<?php
		}
	$sql = $koneksi->query("SELECT count(nip) as lokal from tb_pegawai");
	while ($data= $sql->fetch_assoc()) {
	
		$lokal=$data['lokal'];
	}
?>


<?php
	$sql = $koneksi->query("SELECT count(nip) as blok_1 from tb_pegawai where kategori='BLOK_1'");
	while ($data= $sql->fetch_assoc()) {
	
		$blok_1=$data['blok_1'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as blok_2 from tb_pegawai where kategori='BLOK_2'");
	while ($data= $sql->fetch_assoc()) {
	
		$blok_2=$data['blok_2'];
	}
?>
<?php
	$sql = $koneksi->query("SELECT count(nip) as blok_3 from tb_pegawai where kategori='BLOK_3'");
	while ($data= $sql->fetch_assoc()) {
	
		$blok_3=$data['blok_3'];
	}
?>
<!-- tidak dipakai -->
<?php
	$sql = $koneksi->query("SELECT count(id_pengguna) as boyong from tb_pengguna");
	while ($data= $sql->fetch_assoc()) {
	
		$boyong=$data['boyong'];
	}
?>

<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $lokal;  ?>
				</h3>

				<p>Jumlah Pegawai</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-pegawai" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>
					<?php echo $blok_1; ?>
				</h3>

				<p>Jumlah Karyawan Blok 1</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $blok_2;  ?>
				</h3>

				<p>Jumlah Karyawan Blok 2</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $blok_3;  ?>
				</h3>

				<p>Jumlah Karyawan Blok 3</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="#" class="small-box-footer">Informasi
			</a>
		</div>
	</div>
</div>
<!-- Data Jumlah Per Blok -->
<?php
$date= date('Y-m-d');
	$sql = $koneksi->query("SELECT sum(jumlah) as jum1 from tb_blok1 where tanggal='".$date."'");
	while ($data= $sql->fetch_assoc()) {
	
		$jumblok1=$data['jum1'];
	}
?>
<?php
$date= date('Y-m-d');
$sql = $koneksi->query("SELECT sum(jumlah) as jum2 from tb_blok2 where tanggal = '".$date."'");
while ($data = $sql->fetch_assoc()){
	$jumblok2 = $data['jum2'];
}
?>
<?php
$date= date('Y-m-d');
$sql = $koneksi->query("SELECT sum(jumlah) as jum3 from tb_blok3 where tanggal = '".$date."'");
while ($data = $sql->fetch_assoc()){
	$jumblok3 = $data['jum3'];
}
?>
<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $lokal;  ?>
				</h3>

				<p>Jumlah Pegawai</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-pegawai" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>
					<?php echo $jumblok1; ?>
				</h3>

				<p>Jumlah Data Blok 1 Hari Ini</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="?page=data-blok-1" class="small-box-footer">Informasi
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $jumblok2;  ?>
				</h3>

				<p>Jumlah Data Blok 2 Hari Ini</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="?page=data-blok-2" class="small-box-footer">Informasi
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $jumblok3;  ?>
				</h3>

				<p>Jumlah Data Blok 3 Hari Ini</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="?page=data-blok-3" class="small-box-footer">Informasi
			</a>
		</div>
	</div>
</div>