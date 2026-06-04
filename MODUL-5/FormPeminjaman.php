<?php
require 'Model.php';

$is_edit = false;
$data = null;
$members = getMember();
$books = getBuku();

if (isset($_GET['id'])) {
    $is_edit = true;
    $data = getPeminjamanById($_GET['id']);
}

if (isset($_POST['simpan'])) {
    if ($is_edit) {
        editPeminjaman($_POST['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali'], $_POST['id_member'], $_POST['id_buku']);
    } else {
        tambahPeminjaman($_POST['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali'], $_POST['id_member'], $_POST['id_buku']);
    }
    header('Location: Peminjaman.php');
}

include 'header.php';
?>

<div class="card" style="max-width: 600px; margin: auto;">
    <h2 style="color: var(--primary); border-bottom: 2px solid #eee; padding-bottom: 10px;">
        <?= $is_edit ? 'Edit Transaksi' : 'Form Peminjaman Buku'; ?>
    </h2>
    
    <form action="" method="post">
        <div class="form-group">
            <label>ID Peminjaman</label>
            <input type="number" name="id_peminjaman" value="<?= $is_edit ? $data['id_peminjaman'] : ''; ?>" required <?= $is_edit ? 'readonly style="background:#eee;"' : ''; ?>>
        </div>
        
        <div class="form-group">
            <label>Pilih Member</label>
            <select name="id_member" required>
                <option value="">-- Pilih Member --</option>
                <?php foreach($members as $m): ?>
                    <option value="<?= $m['id_member'] ?>" <?= ($is_edit && $data['id_member'] == $m['id_member']) ? 'selected' : '' ?>>
                        <?= $m['nama_member'] ?> (ID: <?= $m['id_member'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Pilih Buku</label>
            <select name="id_buku" required>
                <option value="">-- Pilih Buku --</option>
                <?php foreach($books as $b): ?>
                    <option value="<?= $b['id_buku'] ?>" <?= ($is_edit && $data['id_buku'] == $b['id_buku']) ? 'selected' : '' ?>>
                        <?= $b['judul_buku'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" value="<?= $is_edit ? $data['tgl_pinjam'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" value="<?= $is_edit ? $data['tgl_kembali'] : ''; ?>" required>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" name="simpan" class="btn btn-primary"><?= $is_edit ? 'Update Transaksi' : 'Proses Peminjaman'; ?></button>
            <a href="Peminjaman.php" class="btn" style="background: #ccc; color: black;">Batal</a>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>