<?php
require 'Model.php';

if (isset($_GET['hapus'])) {
    hapusPeminjaman($_GET['hapus']);
    header('Location: Peminjaman.php');
}

$daftar_pinjam = getPeminjaman();
include 'header.php';
?>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2 style="margin: 0; color: var(--primary);">Catatan Peminjaman</h2>
        <a href="FormPeminjaman.php" class="btn btn-primary">+ Pinjam Buku</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Peminjam (Member)</th>
                <th>Buku yang Dipinjam</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftar_pinjam as $p) : ?>
            <tr>
                <td><?= $p['id_peminjaman']; ?></td>
                <td><span style="color: var(--primary); font-weight: bold;"><?= $p['nama_member']; ?></span></td>
                <td><?= $p['judul_buku']; ?></td>
                <td><?= date('d M Y', strtotime($p['tgl_pinjam'])); ?></td>
                <td><?= date('d M Y', strtotime($p['tgl_kembali'])); ?></td>
                <td>
                    <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman']; ?>" class="btn btn-warning" style="padding: 5px 10px; font-size: 11px;">Edit</a>
                    <a href="Peminjaman.php?hapus=<?= $p['id_peminjaman']; ?>" class="btn btn-danger" style="padding: 5px 10px; font-size: 11px;" onclick="return confirm('Hapus catatan ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>