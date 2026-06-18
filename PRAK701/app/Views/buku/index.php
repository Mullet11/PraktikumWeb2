<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col">
        <h3>Daftar Buku</h3>
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <a href="<?= base_url('buku/create') ?>" class="btn btn-primary mb-3">Tambah Data Buku</a>
        
        <div class="card shadow-sm mb-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th class="ps-3">No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach($bukus as $buku): ?>
                            <tr>
                                <td class="ps-3"><?= $i++ ?></td>
                                <td><?= esc($buku['judul']) ?></td>
                                <td><?= esc($buku['penulis']) ?></td>
                                <td><?= esc($buku['penerbit']) ?></td>
                                <td><?= esc($buku['tahun_terbit']) ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('buku/edit/' . $buku['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="<?= base_url('buku/delete/' . $buku['id']) ?>" method="post" class="d-inline">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if(empty($bukus)): ?>
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">Belum ada data buku.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>
