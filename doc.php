<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>
								<?php echo $nama; ?>
							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>

        <!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/logopx.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> PT PGT</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar fixed">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/user.png" class="img-circle elevation-1" alt="User Image">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level=="Administrator"){
						?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>


						<li class="nav-item">
							<a href="?page=data-pegawai" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Pegawai
								</p>
							</a>
						</li>
						<!-- <li class="nav-header"></li> -->
						<li class="nav-item">
							<a href="?page=data-blok-1" class="nav-link">
								<i class="nav-icon far fa fa-table"></i>
								<p>
								Data Linting Harian
								</p>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="?page=data-blok-2" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Blok 2
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=data-blok-3" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Blok 3
								</p>
							</a>
						</li> -->

						<li class="nav-header">Setting</li>
						<li class="nav-item">
							<a href="?page=data-profil" class="nav-link">
								<i class="nav-icon far fa fa-flag"></i>
								<p>
									Profil Perusahaan
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Pengguna Sistem
								</p>
							</a>
						</li>

						<?php
          				} elseif($data_level=="Sekretaris"){
          				?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-pegawai" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Pegawai
								</p>
							</a>
						</li>

						<li class="nav-header">Setting</li>

						<?php
							}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>
						

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>