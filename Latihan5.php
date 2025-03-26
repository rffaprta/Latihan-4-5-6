<?php
// Nomer 1
$umur = 16;

if ($umur < 13) {
    echo "Kategori: Anak";
} elseif ($umur >= 13 && $umur <= 17) {
    echo "Kategori: Remaja";
} else {
    echo "Kategori: Dewasa";
}
// untuk pengecekan apakah statement diatas itu valid bisa dicoba dengan mengganti nilai variabel $umur diatas dengan ketentuan pada kondisi if else

echo "\n\n";

// Nomer 2
$angka = -5; 

if ($angka > 0) {
    echo "Angka $angka adalah positif.";
} elseif ($angka < 0) {
    echo "Angka $angka adalah negatif.";
} else {
    echo "Angka $angka adalah nol.";
}
// untuk pengecekan apakah statement diatas itu valid bisa dicoba dengan mengganti nilai variabel $angka diatas dengan ketentuan pada kondisi if else

?>

