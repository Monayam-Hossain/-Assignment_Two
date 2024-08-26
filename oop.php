<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook() {
        $this->availableCopies++;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrowBook($book) {
        return $book->borrowBook();
    }

    public function returnBook($book) {
        $book->returnBook();
    }

    public function getName() {
        return $this->name;
    }
}

// Demonstration
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

echo PHP_EOL;

// Member One borrows Book 1
if ($member1->borrowBook($book1)) {
    echo "{$member1->getName()} borrowed '{$book1->getTitle()}'\n";
}

// Member Two borrows Book 2
if ($member2->borrowBook($book2)) {
    echo "{$member2->getName()} borrowed '{$book2->getTitle()}'\n";
}

echo PHP_EOL;

// Display available copies
echo "Available copies of '{$book1->getTitle()}': " . $book1->getAvailableCopies() . "\n";
echo "Available copies of '{$book2->getTitle()}': " . $book2->getAvailableCopies() . "\n";
?>
