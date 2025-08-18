<?php 
session_start();
include_once 'confige.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
  

if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user_id'];
    $text = mysqli_real_escape_string($conn, $_POST['text']);

    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $image = 'uploads/image/' . time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }


    $video = '';
    if (!empty($_FILES['video']['name'])) {
        $video = 'uploads/video/' . time() . '_' . $_FILES['video']['name'];
        move_uploaded_file($_FILES['video']['tmp_name'], $video);
    }


    $stmt = $conn->prepare("INSERT INTO posts (user_id, text, image, video) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $text, $image, $video);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: posting your content.";
    }

}




?>