<?php

require_once 'classes.php';

$books = array();

try {
    $mysqlConnection = new PDO ('mysql:host=localhost;dbname=HW7', 'root', 'root');
    $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $mysqlConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $PDOStatement = $mysqlConnection->prepare('SELECT * FROM Books WHERE id > :id');
    $PDOStatement->bindValue(':id', 0);
    $PDOStatement->execute();
    $booksData = $PDOStatement->fetchAll();
} catch (PDOException $e) {
    print "Error!" . $e->getMessage() . "</br>";
    die();
}

foreach ($booksData as $book) {
    $books[] = new $book['type']($book['id'], $book['name'], $book['author'], $book['file_path'], $book['type'], $book['sort_order']);
}
//while ($row = $booksData->fetch(PDO::FETCH_ASSOC)){
//    $books[] = new BookPdf;
//}
echo '<pre>';