<?php
        $id= $_POST['id'];
        include '../config/koneksi.php';
        $query= mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id='$id'" )
    ?>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="container bg-white box-shadow border-radius-10" style="width: 700px; height: 610px;">
                <div class="login-title">
                    <h2 class="text-center text-primary mb-4 mt-4">Jurnal Kegiatan</h2>
                </div>
                <?php
                     while($item=mysqli_fetch_array($query)){
                    ?>
                <form action="controllers/ubahKegiatan.php" method="post">
                <input type="text" value="<?= $item['id']?>" name="id">
                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg"
                                value="<?=$item['divisi']?>" name="divisi">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control form-control-lg" 
                                value="<?=$item['pelaksanaan']?>" name="pelaksanaan">
                        </div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <input type="time" class="form-control form-control-lg" 
                                value="<?=$item['mulai']?>" name="mulai">
                        </div>
                        <div class="col">
                            <input type="time" class="form-control form-control-lg" 
                                value="<?=$item['selesai']?>" name="selesai">
                        </div>
                    </div>
                    <div class="input-group custom">
                        <div class="col">
                            <textarea class="form-control form-control-lg"  name="kegiatan"
                                cols="30" rows="10"><?=$item['kegiatan']?></textarea>
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