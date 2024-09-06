<?php
require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

// Contoh penggunaan dengan data buku Mariposa
$author = new Author("Luluk HF", "Penulis novel romance remaja");
$publisher = new Publisher("Coconut Books", "Jalan Merpati No. 5", "08123456789");
$book = new Book(123456789, "Mariposa", "Kisah cinta remaja yang penuh lika-liku", "Romance", "Bahasa Indonesia", 400, $author->show("name"), $publisher->name);

// Tampilkan semua detail buku Mariposa
print_r($book->showAll());

// Tampilkan detail buku berdasarkan ISBN
print_r($book->detail(123456789));

// Mendapatkan nomor telepon penerbit
echo $publisher->getPhone();

?>
