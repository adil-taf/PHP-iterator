<?php

declare(strict_types=1);

use App\Book;
use App\BookCollection;

require_once __DIR__ . '/autoload.php';

$bookCollection = new BookCollection();
$bookCollection->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
$bookCollection->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
$bookCollection->addBook(new Book('Patterns of Enterprise Application Architecture', 'Martin Fowler'));
$books = [];
foreach ($bookCollection as $book) {
    $books[] = $book->getAuthorAndTitle();
}
var_dump($books);
