<?php
    $id = $_POST['id'];
    include '../config/koneksi.php';
    $query= mysqli_query($koneksi, "SELECT * FROM absensi WHERE id_absensi='$id'" )
?>

<div class="container">
	<?php
		while($item=mysqli_fetch_array($query)){
	?>
	<h2 class="text-center text-primary mb-4 mt-4">Edit Data</h2>
	<form action="controllers/ubahAbsensi.php" method="post">

		<div class="row g-2 mt-5"> 
			<div class="form-floating mb-4 col-6">
				<input type="date" class="form-control form-control-lg" value="<?=$item['tanggal']?>"  name="tanggal">
			</div>
			<div class="form-floating mb-4 col-6">
				<select class="form-select" name="kehadiran">
					<option value="<?=$item['kehadiran']?>"><?=$item['kehadiran']?></option>
					<option value="Hadir">Hadir</option>
					<option value="Alfa">Alfa</option>
					<option value="Izin">Izin</option>
				</select>
			</div>
		</div>

		<div class="form-floating mb-4">
			<i>tulis keterangan izin</i>
			<input type="text" class="form-control form-control-lg" value="<?= $item['keterangan']?>" name="keterangan">
		</div>


		<div class="d-flex justify-content-center">
			<button class="btn btn-primary col-6" type="submit">Submit</button>
		</div>
	</form>
	<?php
		}
	?>
</div>