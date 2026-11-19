<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <?php
    if (<kondisi>){
        // eksekusi kode ini
    }
    ?>

    <?php
    $total_belanja = 150000;

    if($total_belanja > 100000){
        echo "Anda dapat hadiah!";
    }
    ?>

    <?php

    $umur = 13;

    if ($umur < 18 ){
        echo "Kamu tidak boleh membuka situs ini!";
    } else {
        echo "Selamat datang di website kami!";
    }
    ?>
</body>
</html>