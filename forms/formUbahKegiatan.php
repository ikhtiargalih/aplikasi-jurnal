<?php
    $id= $_POST['id'];
    include '../config/koneksi.php';
    $query= mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id='$id'" )
?>

<div class="container">
    <?php
        while($item=mysqli_fetch_array($query)){    
    ?>
    <h3 class="text-center text-primary mb-4 mt-4">Edit Data</h3>
    <form action="controllers/ubahKegiatan.php" method="post">
        <div class="row g-2 mt-4 mb-4">
            <div class="form-floating col-6 mb-4">
                <input type="text" class="form-control form-control-lg" value="<?=$item['divisi']?>" name="divisi">
            </div>
            <div class="form-floating col-6 mb-4">
                <input type="date" class="form-control form-control-lg" value="<?=$item['pelaksanaan']?>"
                    name="pelaksanaan">
            </div>
        </div>
        <div class="row g-2 mb-4">
            <div class="form-floating col-6 mb-4">
                <input type="time" class="form-control form-control-lg" value="<?=$item['mulai']?>" name="mulai">
            </div>
            <div class="form-floating col-6 mb-4">
                <input type="time" class="form-control form-control-lg" value="<?=$item['selesai']?>" name="selesai">
            </div>
        </div>

        <div class="form-floating mb-4">
            <textarea class="form-control form-control-lg" name="kegiatan" cols="30"
                rows="10"><?=$item['kegiatan']?></textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-primary col-6" type="submit">Submit</button>
        </div>  

    </form>
    <?php
    }
    ?>
</div>