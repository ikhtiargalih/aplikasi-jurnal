<?php
    $id= $_POST['id'];
    include '../config/koneksi.php';
    $query= mysqli_query($koneksi, "SELECT * FROM absensi WHERE id='$id'" )
?>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">

				<div class="container bg-white box-shadow border-radius-10" style="width: 700px; height: 610px;">
					<div class="login-title">
						<h2 class="text-center text-primary mb-4 mt-4">Kehadiran</h2>
					</div>
					<?php
                     while($item=mysqli_fetch_array($query)){
                    ?>
					<form action="controllers/ubahAbsensi.php" method="post">
					<input type="text" value="<?= $item['id']?>" name="id">
						<div class="row mt-4 mb-4">
							<div class="col">
								<input type="date" class="form-control form-control-lg" "
								value="<?=$item['tanggal']?>" name="tanggal">
							</div>
							<div class="col">
                                <select class="form-control" name="kehadiran" >
                                    <option value="<?=$item['kehadiran']?>"><?=$item['kehadiran']?></option>
                                    <option value="Hadir" >Hadir</option>
                                    <option value="Alfa">Alfa</option>
                                    <option value="Izin">Izin</option>
                                </select>
							</div>
						</div>
						<div class="row mt-4 mb-4">
							<div class="col">
								<i>tulis keterangan izin</i>
								<input type="text" class="form-control form-control-lg" 
								value="<?= $item['keterangan']?>" name="keterangan">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="input-group mb-0">
									<input class=" form-submit btn btn-primary btn-lg btn-block" type="submit"
										value="Submit">
								</div>
							</div>
						</div>
					</form>
					<?php
                        }
                    ?>
				</div>
			</div>
		</div>
	</div>