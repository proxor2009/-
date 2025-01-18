<?php
include 'Book.php';
include 'Reader.php';
include 'Library.php';

$library = new Library();

$book1 = new Book("Олег Нечипаренко", "Kizaru Дежавю", 2023);
$book2 = new Book("Николай Соболев", "Путь к успеху", 2016);
$library->addBook($book1);
$library->addBook($book2);

$reader = new Reader("Ilya", "ilya@example.com");
$library->addReader($reader);

$reader->borrowBook($book1);
$library->listBooks();
$reader->returnBook($book1);
?>
