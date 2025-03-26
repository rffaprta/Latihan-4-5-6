<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //1
    $angka = 20;
    echo "Nilai integer: " . $angka .
        "<br>" .
        "<br>";

    //2
    $desimal = 3.14;
    echo "Nilai float: " . $desimal .
        "<br>" .
        "<br>";
    //3
    $teks = "Pemrograman Web";
    echo "Nilai string: " . $teks .
        "<br>" .
        "<br>";

    //4
    $benar = true;
    echo "Nilai boolean: " . ($benar ? 'true' : 'false') .
        "<br>" .
        "<br>";

    //5
    $nama = array("cecep", "asep", "dudu");
    echo "Nama pertama dalam array: " . $nama[0] .
        "<br>" .
        "<br>";

    //6
    class Mobil
    {
        public $merk;
        public $tahun;
    }

    // 
    $mobilSaya = new Mobil();
    $mobilSaya->merk = "Toyota";
    $mobilSaya->tahun = 2022;

    echo "Merk Mobil: " . $mobilSaya->merk .
        "<br>" .
        "<br>";

    echo "Tahun Mobil: " . $mobilSaya->tahun .
        "<br>" .
        "<br>";

    ?>
</body>

</html>