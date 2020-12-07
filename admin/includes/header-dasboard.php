<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrator</title>
	<!--  Script -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
	<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer=""></script>
	<script src = "http://cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian-Alternative.json" defer=""></script>
	<script type="text/javascript" src="../assets/DataTabels/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="../assets/DataTabels/media/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

	<script type="text/javascript">
		$(document).ready( function () {
	    	$('#table_id').DataTable({
		  		"language": {
				    "processing": "Sedang proses...",
				    "lengthMenu": "Tampilan _MENU_ data",
				    "zeroRecords": "Tidak ditemukan data yang sesuai",
				    "info": "Tampilan _START_ sampai _END_ dari _TOTAL_ barang",
				    "infoEmpty": "Tampilan 0 hingga 0 dari 0 entri",
				    "infoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
				    "search": "Cari:",
				    "paginate": {
				        "first": "Awal",
				        "previous": "Balik",
				        "next": "Lanjut",
				        "last": "Akhir"
				    }
				} 
			} );
		} );
	</script>

</head>
<body>
		  <div class="row mt-3  mx-auto">
		    <div class="col-sm-3">
	    	<?php if(isset($_GET['id_lab'])){ ?>
				<?php 
					$data_lab = $conn->query("SELECT * FROM laboratorium WHERE id_lab='".$_GET['id_lab']."'");
					$data_nama_lab = $data_lab->fetch_assoc();
				?>
				<h5>
		      		<a class="font-weight-bold" href="../admin/index.php">Laboratorium Keperawatan <?php echo $data_nama_lab['nama_lab'] ?> </a>
		    	</h5>
			<?php } else{?>
				<h5>
		      		<a class="font-weight-bold" href="../admin/index.php">Laboratorium Keperawatan</a>
		    	</h5>
			<?php } ?>  
<!-- 		    <h5>
		      <a class="font-weight-bold" href="../admin/index.php">Laboratorium Keperawatan</a>
		    </h5>   -->
		    </div>
		    <div class="col pd-5 text-right">
		    Nama Pengguna : <?php echo $_SESSION['nama'] ?>
		    </div>
		     <div class="col-sm-1">
		      <a class="nav-link btn btn-danger btn-sm text-white" href="logout.php">Keluar</a>
		    </div>
		  </div>
<!-- 		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../admin/index.php">Laboratorium Keperawatan<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item ">
					<a class="nav-link btn btn-danger btn-sm text-white" href="logout.php">Keluar</a>
				</li>
			</ul>
		</div> -->
	</nav>


