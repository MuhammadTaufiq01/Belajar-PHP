<?php

$nama = "M";

// echo "Halo, nama saya $nama";

// $x = 10;
// $y = 20;
// echo $x * $y;

// $nama_depan = "Muhammad";
// $nama_belakang = "Taufiq";
// echo $nama_depan ." ". $nama_belakang;

// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Muhammad";
// $nama .= " ";
// $nama .= "Taufiq";
// echo $nama;

// var_dump(1 == "1");

// identitas untuk membandingkan tipe data
// ===, !==
var_dump(1 === "1");

// logika
// &&, ||, !
$x = 30;
var_dump($x < 20 && $x % 2 == 0);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1> Hallo <?php echo $nama ?></h1> <!--php dalam html-->
    <?php echo "Hallo <h1> Taufiq</h1>"?>
</body>
</html>

