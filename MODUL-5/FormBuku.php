<?php
require 'Model.php';

$is_edit = false;
$data = null;

if (isset($_GET['id'])) {
    $is_edit = true;
    $data = getBukuById($_GET['id']);
}

if (isset($_POST['simpan'])) {
    if ($is_edit) {
        editBuku($_POST['id_buku'], $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    } else {
        tambahBuku($_POST['id_buku'], $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    header('Location: Buku.php');
}

include 'header.php';
?>

<div class="card" style="max-width: 600px; margin: auto;">
    <h2 style="color: var(--primary); border-bottom: 2px solid #eee; padding-bottom: 10px;">
        <?= $is_edit ? 'Edit Data Buku' : 'Tambah Buku Baru'; ?>
    </h2>
    
    <form action="" method="post">
        <div class="form-group">
            <label>ID Buku</label>
            <input type="number" name="id_buku" value="<?= $is_edit ? $data['id_buku'] : ''; ?>" required <?= $is_edit ? 'readonly style="background:#eee;"' : ''; ?>>
        </div>
        
        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku" value="<?= $is_edit ? $data['judul_buku'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" value="<?= $is_edit ? $data['penulis'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?= $is_edit ? $data['penerbit'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="<?= $is_edit ? $data['tahun_terbit'] : ''; ?>" required>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" name="simpan" class="btn btn-primary"><?= $is_edit ? 'Simpan Perubahan' : 'Tambahkan Buku'; ?></button>
            <a href="Buku.php" class="btn" style="background: #ccc; color: black;">Batal</a>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>