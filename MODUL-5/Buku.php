<?php
require 'Model.php';

if (isset($_GET['hapus'])) {
    hapusBuku($_GET['hapus']);
    header('Location: Buku.php');
}

$daftar_buku = getBuku();
include 'header.php';
?>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2 style="margin: 0; color: var(--primary);">Koleksi Buku</h2>
        <a href="FormBuku.php" class="btn btn-primary">+ Tambah Buku</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftar_buku as $b) : ?>
            <tr>
                <td><?= $b['id_buku']; ?></td>
                <td><strong><?= $b['judul_buku']; ?></strong></td>
                <td><?= $b['penulis']; ?></td>
                <td><?= $b['penerbit']; ?></td>
                <td><?= $b['tahun_terbit']; ?></td>
                <td>
                    <a href="FormBuku.php?id=<?= $b['id_buku']; ?>" class="btn btn-warning" style="padding: 5px 10px; font-size: 11px;">Edit</a>
                    <a href="Buku.php?hapus=<?= $b['id_buku']; ?>" class="btn btn-danger" style="padding: 5px 10px; font-size: 11px;" onclick="return confirm('Yakin hapus buku ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>