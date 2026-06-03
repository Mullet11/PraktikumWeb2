<?php include 'header.php'; ?>

<div style="text-align: center; margin-top: 50px;">
    <h1 style="color: var(--primary);">Selamat Datang di Portal Mullet Book</h1>
    <p style="color: var(--text-secondary);">Sistem Manajemen Perpustakaan Modern Berbasis Material Design</p>
</div>

<div style="display: flex; gap: 20px; margin-top: 40px; justify-content: center;">
    <div class="card" style="width: 200px; text-align: center;">
        <h2 style="font-size: 40px; margin: 0;">👥</h2>
        <h3>Member</h3>
        <a href="Member.php" class="btn btn-primary">Kelola</a>
    </div>
    <div class="card" style="width: 200px; text-align: center;">
        <h2 style="font-size: 40px; margin: 0;">📚</h2>
        <h3>Buku</h3>
        <a href="Buku.php" class="btn btn-primary">Kelola</a>
    </div>
    <div class="card" style="width: 200px; text-align: center;">
        <h2 style="font-size: 40px; margin: 0;">🔄</h2>
        <h3>Peminjaman</h3>
        <a href="Peminjaman.php" class="btn btn-primary">Kelola</a>
    </div>
</div>

<?php include 'footer.php'; ?>