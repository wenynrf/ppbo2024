<?php
// Class Author
class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type) {
        if ($type == "name") {
            return $this->name;
        } else if ($type == "description") {
            return $this->description;
        }
        return [];
    }
}

// Class Book
class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        }
        return [];
    }
}

// Class Publisher
class Publisher {
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}

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
