<div class="card card-info bg-primary">
<h3 class="mt-1 text-center">Data Blok 3</h3>

<!-- /.card-header -->
	<div class="card-body bg-white">
		<div class="table-responsive">
			<!-- <div>
				<a href="?#" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br> -->
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Data Merah</th>
						<th>Data Cokelat</th>
						<th>Data Hitam</th>
						<th>Data Jawas</th>
						<th>Jumlah</th>
						<th>Paten</th>
						<th>Tanggal</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			//   $tgl =date('d')-1;
			//   if($tgl<10){
			// 	$tanggal = date('Y-m').'-0'.$tgl;
			//   }else{
			// 	$tanggal = date('Y-m').'-'.$tgl;
			//   }
			  $tanggal = date('Y-m-d');
			  $sql = $koneksi->query("SELECT * from tb_pegawai where kategori='BLOK_3'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr class="text-center">
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nip']; ?>
						</td>
						<td class="text-left">
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php $lin = $koneksi->query("SELECT * FROM tb_blok3 where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
							while ($data2= $lin->fetch_assoc()) { 
								echo $data2['lt_merah'];}?>
						</td>
						<td>
						<?php $lin = $koneksi->query("SELECT * FROM tb_blok3 where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
							while ($data2= $lin->fetch_assoc()) { 
								echo $data2['lt_cokelat'];}?>
						</td>
						<td>
						<?php $lin = $koneksi->query("SELECT * FROM tb_blok3 where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
							while ($data2= $lin->fetch_assoc()) { 
								echo $data2['lt_hitam'];}?>
						</td>
						<td>
						<?php $lin = $koneksi->query("SELECT * FROM tb_blok3 where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
							while ($data2= $lin->fetch_assoc()) { 
								echo $data2['lt_jawas'];}?>
						</td>
						<td>
						<?php $lin = $koneksi->query("SELECT * FROM tb_blok3 where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
							while ($data2= $lin->fetch_assoc()) { 
								echo $data2['jumlah'];}?>
						</td>
						<td>
						<?php $lin = $koneksi->query("SELECT * FROM tb_blok3 where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
							while ($data2= $lin->fetch_assoc()) { 
								echo $data2['paten'];}?>
						</td>
						<td>
						<?php $lin = $koneksi->query("SELECT * FROM tb_blok3 where (nip IS NULL OR nip ='".$data['nip']."') and (tanggal IS NULL OR tanggal ='".$tanggal."')");
							while ($data2= $lin->fetch_assoc()) { 
								echo $data2['tanggal'];}?>
						</td>

						<td>
							<!-- <a href="?page=view-pegawai&kode=<?php echo $data['nip']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a> -->
							
							<a href="#=<?php echo $data['nip']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<!-- <a href="#=<?php echo $data['nip']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
								</a> -->
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	</div>
	<!-- /.card-body -->