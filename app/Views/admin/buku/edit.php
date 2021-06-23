<?= $this->extend('layout/master'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                View Buku
            </div>
            <div class="card-body">
                <table class="table table bordered">
                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><img src="/image/<?= $data->foto; ?>" alt="" style="width:200px"></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><?= $data->judul; ?></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>:</td>
                        <td><?= $data->penerbit; ?></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?= $data->keterangan; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
        <div class="card">
        <div class="card-header">
            Edit Buku
        </div>
            <div class="card-body">
            <form action="/bookcontroller/update" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= $data->id; ?>">
                    <div class="mb-3">
                        <label for="" class="mb-2">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?= $data->judul; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="<?= $data->penerbit; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Keterangan</label>
                        <textarea name="keterangan" cols="30" rows="25" class="form-control"><?= $data->keterangan; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Foto</label>
                        <div class="mb-2">
                            <img src="/image/<?= $data->foto; ?>" alt="" class="" style="width:150px">
                        </div>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <input type="submit" value="EDIT" class="btn" style="background:rgb(255, 112, 136) !important;color:white">
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
