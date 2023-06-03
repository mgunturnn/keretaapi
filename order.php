<?php
require 'server/config.php';
session_start();
$id = $_SESSION['user_id'];
$bytes = random_bytes(10);
$_code = random_bytes(20);
$id_payment = random_bytes(5);
$id_jadwal = $_GET['id'];


require 'pages/templates/header.php';
require 'pages/navbar/navbar.php';
?>
<div class="wrapper">
	<div class="jumbotron text-center bg-warning header">
		<div class="text-white">
			<h4>Sistem pemesanan tiket kereta api</h4>
		</div>
	</div>
	<div class="container">
		<div class="jumbotron box-search bg-light">
			<div class="col-sm-12  overflow-auto">
				<div class="container">
					<div class="col-lg-12">
						<h2>Order Now!</h2>
						<p>isi data anda dengan lengkap!</p>
					</div>
					<div class="dropdown-divider"></div>
					<form method="post" action="q_order.php">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="id_jadwal" value="<?=$id_jadwal?>" hidden >
								<input type="text" class="form-control" name="nama" placeholder="masukkan nama" required="required">
							</div>
							<div class="form-group">
								<label>No HP</label>
								<input type="text" class="form-control" name="no_hp" placeholder="masukkan no hp" required="required">
							</div>
							<div class="form-group">
								<label>Kategori Penumpang</label>
								<input type="text" class="form-control" name="kategori_penumpang" placeholder="dewasa atau anak" required="required">
							</div>
							<div class="col-sm-10">
								<div class="row">
									<div class="form-group">
										<label>Tanggal Order</label>
										<input type="date" class="form-control" name="tgl_order" required="required">

										<label>Jumlah Penumpang</label>
										<input type="text" class="form-control" name="jml_penumpang" placeholder="1" required="required">
									</div>
								</div>
							</div>
							<input type="submit" class="btn btn-primary" name="btn-order" value="submit">
							<p>Lorem ipsum dolor sit amet <a href="index.php">Back</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>


?>

<?php include 'pages/templates/footer.php'; ?>