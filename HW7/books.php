<?php

require_once 'data.php';

foreach ($books as $book) {
    echo '<pre>';
    $book->printInfo();
    echo '</pre>';
}