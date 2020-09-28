<?php
$mahasiswa = [
    ["Muhammad Taufiq", "123456789", "Teknik Informatika", "email"],
    ["Indriani", "123456788", "Teknik Informatika", "email"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?php echo $mhs[0] ?></li>
            <li>NIM: <?php echo $mhs[1] ?></li>
            <li>Jurusan: <?php echo $mhs[2] ?></li>
            <li>Email: <?php echo $mhs[3] ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>