<?php

// perulangn
// for
// while
// do while
// foreach : khusus array

for( $i = 0; $i < 5; $i++){
    echo "hello world! <br>";
}

$i=0;
while ($i < 5){
    echo "Hello World <br>";
    $i++;
}

$i=6;
while ($i < 5){
    echo "HeLlO wOrLd <br>";
    $i++;
}

$i = 0;
do{
    echo "HELLO WORLD! <br>";
    $i++;
} while ($i < 5);
?>

<br><br><br>

<!-- dalam html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

    <table border= "1" cellpadding="10" cellspacing="0">
    <!-- gaya template
        memisahkan yang mau ditampilkan
        tag php dengan php,
        tag html dengan html -->

        <?php for( $i = 1; $i <=3; $i++ ) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else: ?>
                <tr>
            <?php endif;?>
                    <?php for ($j = 1; $j <=5; $j++) :?>
                        <td><?= "$i,$j";?></td> <!-- tanda "=" sama dengan "php echo" -->
                    
                    <?php endfor;?>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>