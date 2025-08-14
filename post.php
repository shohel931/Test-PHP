<?php 
include 'confige.php';
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = trim($_POST['text']);
    $image = "";
    $video = "";

    
}






?>