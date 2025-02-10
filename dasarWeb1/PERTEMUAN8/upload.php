<?php
if (isset($_POST["submit"])) {
    // Pastikan file diupload dengan benar
    if (isset($_FILES["fileToUpload"])) {
        // Cek jika tidak ada error pada file yang diupload
        if ($_FILES["fileToUpload"]["error"] === 0) {
            $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
            $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
            $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $allowedExtensions = array("txt", "pdf", "doc", "docx");
            $maxFileSize = 10 * 1024 * 1024; // 10 MB

            // Cek apakah ekstensi file diperbolehkan dan ukuran file sesuai
            if (in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
                // Pindahkan file yang diupload ke direktori tujuan
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                    echo "Dokumen berhasil diunggah.";
                } else {
                    echo "Gagal mengunggah dokumen. Coba lagi.";
                }
            } else {
                echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
            }
        } else {
            // Jika ada error saat upload file
            echo "Terjadi kesalahan saat mengunggah file. Error: " . $_FILES["fileToUpload"]["error"];
        }
    } else {
        echo "Tidak ada file yang dipilih untuk diunggah.";
    }
}
?>
