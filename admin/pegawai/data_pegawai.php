<div class="card card-info ">
	<div class=" card-header ">
		<h3 class="card-title">
			<i class="fa fa-table "></i> Data Pegawai</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pegawai" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table style="display: block; overflow-x: auto; white-space: nowrap;" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIP</th>
						<th>NIK</th>
						<th>No Hp</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Kel/Desa</th>
						<th>Kec</th>
						<th>Kab/Kota</th>
						<th>Tempat Lahir</th>
						<th>Tgl Lahir</th>
						<th>Kategori</th>
						<th>Join Date</th>
						<th>Masa</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from tb_pegawai order by nip desc");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<!-- <td align="center">
							<img src="foto/<?php echo $data['foto']; ?>" width="70px" />
						</td> -->
						<td>
							<?php echo $data['nip']; ?>
						</td>
						<td>
							<?php echo $data['nik']; ?>
						</td>
						<td>
							<?php echo $data['notelpon']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['kel_desa']; ?>
						</td>
						<td>
							<?php echo $data['kec']; ?>
						</td>
						<td>
							<?php echo $data['kab_kota']; ?>
						</td>
						<td>
							<?php echo $data['temp_lahir']; ?>
						</td>
						<td>
							<?php echo $data['tgl_lahir']; ?>
						</td>
						<td>
							<?php echo $data['kategori']; ?>
						</td>
						<td>
							<?php echo $data['masuk']; ?>
						</td>
						<td>
							<?php

								$waktustart=$data['masuk'];
								$waktuend=date("Y-m-d");
								$datetime1 = new DateTime($waktustart);//start time
								$datetime2 = new DateTime($waktuend);//end time
								$durasi = $datetime1->diff($datetime2);

								echo $durasi->format('%a hari ');
							
							?>
						</td>

						<td>
							<a href="?page=view-pegawai&kode=<?php echo $data['nip']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-pegawai&kode=<?php echo $data['nip']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pegawai&kode=<?php echo $data['nip']; ?>" onclick="return confirm('Apakah anda yakin hapus data <?php echo $data['nama']; ?> dengan nip: <?php echo $data['nip']; ?>')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
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
	<!-- /.card-body -->