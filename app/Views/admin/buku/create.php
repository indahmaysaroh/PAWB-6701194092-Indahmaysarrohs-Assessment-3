<?= $this->extend('layout/master'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
        <div class="card-header">
            Tambah Buku
        </div>
            <div class="card-body">
            <form action="/bookcontroller/store" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="" class="mb-2">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Keterangan</label>
                        <textarea name="keterangan" cols="30" rows="25" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <input type="submit" value="TAMBAH" class="btn" style="background:rgb(255, 112, 136) !important;color:white">
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
