<?php
require 'Model.php';

if (isset($_GET['hapus'])) {
    hapusMember($_GET['hapus']);
    header('Location: Member.php');
}

$members = getMember();
include 'header.php'; 
?>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2 style="margin: 0; color: var(--primary);">Daftar Member</h2>
        <a href="FormMember.php" class="btn btn-primary">+ Tambah Member</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>No. Member</th>
                <th>Alamat</th>
                <th>Tgl Mendaftar</th>
                <th>Tgl Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $m) : ?>
            <tr>
                <td><?= $m['id_member']; ?></td>
                <td><strong><?= $m['nama_member']; ?></strong></td>
                <td><?= $m['nomor_member']; ?></td>
                <td><?= $m['alamat']; ?></td>
                <td><?= date('d/m/Y H:i', strtotime($m['tgl_mendaftar'])); ?></td>
                <td><?= date('d/m/Y', strtotime($m['tgl_terakhir_bayar'])); ?></td>
                <td>
                    <a href="FormMember.php?id=<?= $m['id_member']; ?>" class="btn btn-warning" style="padding: 5px 10px; font-size: 11px;">Edit</a>
                    <a href="Member.php?hapus=<?= $m['id_member']; ?>" class="btn btn-danger" style="padding: 5px 10px; font-size: 11px;" onclick="return confirm('Yakin ingin menghapus member ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php';?>