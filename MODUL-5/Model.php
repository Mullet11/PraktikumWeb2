<?php
require 'Koneksi.php';

function getMember() {
    $conn = koneksi();
    $sql = "SELECT * FROM member";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMemberById($id) {
    $conn = koneksi();
    $sql = "SELECT * FROM member WHERE id_member = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function tambahMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = koneksi();
    $sql = "INSERT INTO member VALUES ('$id', '$nama', '$nomor', '$alamat', '$tgl_daftar', '$tgl_bayar')";
    return mysqli_query($conn, $sql);
}

function editMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = koneksi();
    $sql = "UPDATE member SET 
            nama_member = '$nama', 
            nomor_member = '$nomor', 
            alamat = '$alamat', 
            tgl_mendaftar = '$tgl_daftar', 
            tgl_terakhir_bayar = '$tgl_bayar' 
            WHERE id_member = $id";
    return mysqli_query($conn, $sql);
}

function hapusMember($id) {
    $conn = koneksi();
    $sql = "DELETE FROM member WHERE id_member = $id";
    return mysqli_query($conn, $sql);
}

function getBuku() {
    $conn = koneksi();
    $sql = "SELECT * FROM buku";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getBukuById($id) {
    $conn = koneksi();
    $sql = "SELECT * FROM buku WHERE id_buku = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function tambahBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = koneksi();
    $sql = "INSERT INTO buku VALUES ('$id', '$judul', '$penulis', '$penerbit', '$tahun')";
    return mysqli_query($conn, $sql);
}

function editBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = koneksi();
    $sql = "UPDATE buku SET 
            judul_buku = '$judul', 
            penulis = '$penulis', 
            penerbit = '$penerbit', 
            tahun_terbit = '$tahun' 
            WHERE id_buku = $id";
    return mysqli_query($conn, $sql);
}

function hapusBuku($id) {
    $conn = koneksi();
    $sql = "DELETE FROM buku WHERE id_buku = $id";
    return mysqli_query($conn, $sql);
}

function getPeminjaman() {
    $conn = koneksi();
    // Menggunakan JOIN agar nama member dan judul buku muncul di tabel 
    $sql = "SELECT p.*, m.nama_member, b.judul_buku 
            FROM peminjaman p
            JOIN member m ON p.id_member = m.id_member
            JOIN buku b ON p.id_buku = b.id_buku";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getPeminjamanById($id) {
    $conn = koneksi();
    $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function tambahPeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    $conn = koneksi();
    $sql = "INSERT INTO peminjaman VALUES ('$id', '$tgl_pinjam', '$tgl_kembali', '$id_member', '$id_buku')";
    return mysqli_query($conn, $sql);
}

function editPeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    $conn = koneksi();
    $sql = "UPDATE peminjaman SET 
            tgl_pinjam = '$tgl_pinjam', 
            tgl_kembali = '$tgl_kembali', 
            id_member = '$id_member', 
            id_buku = '$id_buku' 
            WHERE id_peminjaman = $id";
    return mysqli_query($conn, $sql);
}

function hapusPeminjaman($id) {
    $conn = koneksi();
    $sql = "DELETE FROM peminjaman WHERE id_peminjaman = $id";
    return mysqli_query($conn, $sql);
}