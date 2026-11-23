<?php

require_once 'Kucing.php';
require_once 'Anjing.php';

$kucing = new Kucing();
$kucing->setNama('Moly');
$kucing->setUmur(4);

$anjing = new Anjing();
$anjing->setNama('Hatchy');
$anjing->setUmur(7);

$daftarHewan = [$kucing, $anjing];
?> 
<!-- "DISCLAIMER" disini fadly pake cara yang di ajarin pa lalan buat bentukan yang menggabungkan html dan php berarti setiap php wajib ada tag penutup nya biar si html nya bisa jalan jujur pusing tapi pas quiz di kelas alhamdulilah ngerti jadi bisa  -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        table { border-collapse: collapse; width: 520px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Data Hewan</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis</th>
                <th>Suara</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarHewan as $hewan): ?>
                <tr>
                    <td><?= htmlspecialchars($hewan->getNama()) ?></td>
                    <td><?= htmlspecialchars((string) $hewan->getUmur()) ?> tahun</td>
                    <td><?= htmlspecialchars($hewan->getJenis()) ?></td>
                    <td><?= htmlspecialchars($hewan->getSuara()) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>