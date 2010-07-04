<?php 
// Set variables
$current_book = 'railway'; // Set Default book and chapter
$current_chapter = '1';

if (isset($_GET['book'])) {
$current_book = $_GET['book'];
}

$bookTitle = $current_book; // Alias of $bookTitle is $current_book

if (isset($_GET['chapter'])) {
$current_chapter = $_GET['chapter'];
}

require('data/'.$current_book.'.php'); // Get book-specific information including copyright and audio data
?>