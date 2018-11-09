<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sexto = trim(filter_input(INPUT_POST, 'sexto', FILTER_SANITIZE_STRING));
    if ($sexto) {
        if (!array_key_exists($sexto, array_flip(file(__DIR__.'/database-new.txt')))) {
            file_put_contents(__DIR__.'/database-new.txt', $sexto."\n", FILE_APPEND);
        }
        header('Location:/?sexto=added');
    }
}
