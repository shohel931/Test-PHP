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


    // Image Upload
    if (isset($_FILES['imageinput']) && $_FILES['imageinput']['error'] == 0) {
        $image_name = time() . '_' . $_FILES['imageinput']['name'];
        $target_dir = "uploads/image/";
        $target_file = $target_dir . basename($image_name);
    }
}






?>