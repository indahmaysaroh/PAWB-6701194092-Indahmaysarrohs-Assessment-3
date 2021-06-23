<?= $this->extend('layout/master'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
        <div class="card-header">
            Manage Buku
        </div>
            <div class="card-body">
                <a href="/buku/create" class="btn mb-3" style="background:rgb(255, 112, 136) !important;color:white">Tambah Buku</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penerbit</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no =1 ; foreach($data as $buku) : ?>

                        <tr>
                            <td><?= $no++ ;?></td>
                            <td><?= $buku->judul; ?></td>
                            <td><?= $buku->penerbit; ?></td>
                            <td><?= $buku->keterangan; ?></td>
                            <td>
                                <a href="/buku/edit/<?= $buku->id; ?>" class="btn" style="background:rgb(255, 112, 136) !important;color:white">Detail</a>
                                <a href="/buku/delete/<?= $buku->id; ?>" class="btn" style="background:rgb(255, 112, 136) !important;color:white">Hapus</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
