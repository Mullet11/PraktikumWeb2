<?php
$data = [
    [
        "no" => 1, "nama" => "Ridho",
        "matkul" => [
            ["nama" => "Pemrograman I", "sks" => 2],
            ["nama" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2, "nama" => "Ratna",
        "matkul" => [
            ["nama" => "Basis Data I", "sks" => 2],
            ["nama" => "Praktikum Basis Data I", "sks" => 1],
            ["nama" => "Kalkulus", "sks" => 3],
        ]
    ],
    [
        "no" => 3, "nama" => "Tono",
        "matkul" => [
            ["nama" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama" => "Komputasi Awan", "sks" => 3],
            ["nama" => "kecerdasan Bisnis", "sks" => 3]
        ]
    ]
];

foreach ($data as &$mhs) {
    $total = 0;
    foreach ($mhs['matkul'] as $mk) {
        $total += $mk['sks'];
    }
    $mhs['total_sks'] = $total;
    $mhs['keterangan'] = ($total < 7) ? "Revisi KRS" : "Tidak Revisi";
}

unset($mhs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak403</title>
    <style>
        table {border-collapse: collapse; width: fit-content;}
        th, td {border: 1px solid black; padding: 10px;}
        th {background-color: #eee;}
        .revisi {background-color: #ffcccc;}
        .tidak-revisi {background-color: #ccffcc;}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th><th>Nama</th><th>Mata Kuliah diambil</th><th>SKS</th><th>Total SKS</th><th>Keterangan</th>
        </tr>
        <?php foreach ($data as $mhs): ?>
            <?php foreach ($mhs['matkul'] as $key => $mk): ?>
                <tr>
                    <td><?= ($key ==0) ? $mhs['no'] : ' ' ?></td>
                    <td><?= ($key ==0) ? $mhs['nama'] : ' ' ?></td>
                    <td><?= $mk['nama'] ?></td>
                    <td><?= $mk['sks'] ?></td>
                    <td><?= ($key == 0) ? $mhs['total_sks'] : '' ?></td>
                    <td class="<?= ($key == 0) ? (($mhs['total_sks'] < 7) ? 'revisi' : 'tidak-revisi') : '' ?>">
                        <?= ($key == 0) ? $mhs['keterangan'] : '' ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>