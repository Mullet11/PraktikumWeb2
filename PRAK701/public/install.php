<?php
// Script untuk setup database via Browser (agar menggunakan MySQL Laragon)
require '../vendor/autoload.php';
require '../app/Config/Paths.php';
$paths = new Config\Paths();
require rtrim($paths->systemDirectory, '\\/ ') . '/bootstrap.php';

try {
    // Connect to MySQL
    $mysqli = new mysqli('localhost', 'root', '');
    if ($mysqli->connect_error) {
        die('Koneksi Database Gagal: ' . $mysqli->connect_error . '<br>Pastikan MySQL Laragon sudah nyala.');
    }
    
    // Create database
    $mysqli->query("CREATE DATABASE IF NOT EXISTS db_prak701");
    echo "Database 'db_prak701' berhasil dipastikan ada.<br>";
    
    // Run Migrations & Seeder
    $command = new \CodeIgniter\CLI\CommandRunner();
    $command->initController(\Config\Services::request(), \Config\Services::response(), \Config\Services::logger());
    
    // Hack to capture CLI output
    ob_start();
    command('migrate');
    echo "<b>Hasil Migrasi:</b><br>" . nl2br(ob_get_clean()) . "<br>";
    
    ob_start();
    command('db:seed UserSeeder');
    echo "<b>Hasil Seeder:</b><br>" . nl2br(ob_get_clean()) . "<br>";
    
    echo "<h3>Setup Selesai!</h3>";
    echo "<a href='index.php'>Klik di sini untuk ke halaman Login</a>";

} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
