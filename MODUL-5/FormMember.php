<?php
require 'Model.php';

$is_edit = false;
$data = null;

if (isset($_GET['id'])) {
    $is_edit = true;
    $data = getMemberById($_GET['id']);
}

if (isset($_POST['simpan'])) {
    if ($is_edit) {
        editMember($_POST['id_member'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    } else {
        tambahMember($_POST['id_member'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    }
    header('Location: Member.php');
}

include 'header.php';
?>

<div class="card" style="max-width: 600px; margin: auto;">
    <h2 style="color: var(--primary); border-bottom: 2px solid #eee; padding-bottom: 10px;">
        <?= $is_edit ? 'Edit Data Member' : 'Tambah Member Baru'; ?>
    </h2>
    
    <form action="" method="post">
        <div class="form-group">
            <label>ID Member (Angka)</label>
            <input type="number" name="id_member" value="<?= $is_edit ? $data['id_member'] : ''; ?>" required <?= $is_edit ? 'readonly style="background:#eee;"' : ''; ?>>
        </div>
        
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_member" value="<?= $is_edit ? $data['nama_member'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Nomor Member</label>
            <input type="text" name="nomor_member" value="<?= $is_edit ? $data['nomor_member'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Alamat Lengkap</label>
            <textarea name="alamat" rows="3" required><?= $is_edit ? $data['alamat'] : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Tanggal Mendaftar</label>
            <input type="datetime-local" name="tgl_mendaftar" value="<?= $is_edit ? date('Y-m-d\TH:i', strtotime($data['tgl_mendaftar'])) : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Tanggal Terakhir Bayar</label>
            <input type="date" name="tgl_terakhir_bayar" value="<?= $is_edit ? $data['tgl_terakhir_bayar'] : ''; ?>" required>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" name="simpan" class="btn btn-primary"><?= $is_edit ? 'Simpan Perubahan' : 'Tambahkan Member'; ?></button>
            <a href="Member.php" class="btn" style="background: #ccc; color: black;">Batal</a>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>