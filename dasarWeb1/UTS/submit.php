<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = isset($_POST['angka1']) ? (int)$_POST['angka1'] : null;
    $angka2 = isset($_POST['angka2']) ? (int)$_POST['angka2'] : null;
    $angka3 = isset($_POST['angka3']) ? (int)$_POST['angka3'] : null;
    $angka4 = isset($_POST['angka4']) ? (int)$_POST['angka4'] : null;

    $angkaArray = [$angka1, $angka2, $angka3, $angka4];
    
    $min = min($angkaArray);
    $max = max($angkaArray);

    echo "Angka Terkecil: $min, Angka Terbesar: $max";
}
?>
