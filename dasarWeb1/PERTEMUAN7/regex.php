<?php

// percobaan 5.1
$pattern = '/[a-z]/'; 
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!<br>";
} else {
    echo "Tidak ada huruf kecil!<br>";
} 

// percobaan 5.2
$pattern = '/[0-9]+/'; 
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
} 

// percobaan 5.3
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text . "<br>"; // Output: "I like banana pie."

// Percobaan 5.4: Memeriksa pola "go?d" dalam teks
// $pattern = '/go?d/'; // Cocokkan "god", "gd" (hanya 0 atau 1 'o') percobaan 5.5 gebelumnya '/go*d/'
$pattern = '/go{n,m}d/';
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
?>
