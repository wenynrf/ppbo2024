<?php

namespace App\Model\Pustaka;

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
