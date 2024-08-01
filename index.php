<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
    }

    //KONEKSI DB
	include "inc/koneksi.php";
	
	$sql = $koneksi->query("SELECT * from tb_profil");
	while ($data= $sql->fetch_assoc()) {
	
	$nama=$data['nama_profil'];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php
		if(isset($_GET['index.php'])){
			$title = 'PGT LINTING';
			echo $title;
		}
		?>
	</title>
	<link rel="icon" href="dist/img/logopx.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="hold-transition bg-dark">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		
		<nav class="navbar navbar-expand-lg bg-danger bg-gradient sticky-sm-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="dist/img/logopx.png" width="50" style="background-color: black;" class="img-circle elevation-1" alt="User Image"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=data-pegawai">Data Pegawai</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data Harian
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=data-blok-1">Blok 1</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page=data-blok-2">Blok 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page=data-blok-3">Blok 3</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="?page=pegawai-rekap">Pegawai Rekap</a>
        </li>
      </ul>
	  
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
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
    </div>
  </div>
</nav>

		<!-- /.navbar -->

		

		<!-- Content Wrapper. Contains page content -->
		<div class="content">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid ml-2 mr-2">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              	case 'admin':
                  include "home/admin.php";
				  $title = 'PGT LINTING';
                  break;
				case 'sekretaris':
                  include "home/sekretaris.php";
				  break;

				//Pengguna
				case 'data-pengguna':
					include "admin/pengguna/data_pengguna.php";
					break;
				case 'add-pengguna':
					include "admin/pengguna/add_pengguna.php";
					break;
				case 'edit-pengguna':
					include "admin/pengguna/edit_pengguna.php";
					break;
				case 'del-pengguna':
					include "admin/pengguna/del_pengguna.php";
					break;

				//Data Linting
				case 'data-blok-1':
					include "admin/blok/data_blok_1.php";
					break;
				case 'data-blok-2':
					include "admin/blok/data_blok_2.php";
					break;
				case 'data-blok-3':
					include "admin/blok/data_blok_3.php";
					break;
				
				//Pegawai
				case 'data-pegawai':
					include "admin/pegawai/data_pegawai.php";
					break;
				case 'add-pegawai':
					include "admin/pegawai/add_pegawai.php";
					break;
				case 'edit-pegawai':
					include "admin/pegawai/edit_pegawai.php";
					break;
				case 'del-pegawai':
					include "admin/pegawai/del_pegawai.php";
					break;
				case 'view-pegawai':
					include "admin/pegawai/view_pegawai.php";
					break;

				//Profil
				case 'data-profil':
					include "admin/profil/data_profil.php";
					break;
				case 'edit-profil':
					include "admin/profil/edit_profil.php";
					break;

				//Rekap
				case 'pegawai-rekap':
					include "admin/rekap/pegawairekap.php";
					break;	

			
              //default
              default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
          elseif($data_level=="Sekretaris"){
              include "home/sekretaris.php";
              }
          }
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="footer bg-danger bg-gradient p-3">
			<div class="container">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="https://marufiskandar.my.id/">
					<strong > iskhandare</strong>
				</a>
				All rights reserved.
			</div>
			<b>Created 2024</b>
			</div>
			
		</footer>

		<!-- Control Sidebar -->
		<!-- <aside class="control-sidebar control-sidebar-dark"> -->
			<!-- Control sidebar content goes here -->
		<!-- </aside> -->
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>