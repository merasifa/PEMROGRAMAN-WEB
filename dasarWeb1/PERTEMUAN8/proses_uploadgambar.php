<?php
$targetDirectory = "uploads/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Tentukan ekstensi file yang diizinkan
$allowedExtensions = array("jpg", "jpeg", "png", "gif");

// Tentukan ukuran file maksimum (5 MB)
$maxFileSize = 5 * 1024 * 1024; // 5 MB

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . basename($fileName);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $fileSize = $_FILES['files']['size'][$i];

        // Validasi ekstensi file dan ukuran file
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxFileSize) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            if (!in_array($fileType, $allowedExtensions)) {
                echo "File $fileName memiliki ekstensi yang tidak valid.<br>";
            } 
            if ($fileSize > $maxFileSize) {
                echo "File $fileName melebihi ukuran maksimum yang diizinkan (5 MB).<br>";
            }
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
