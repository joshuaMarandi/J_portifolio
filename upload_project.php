<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    
    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["project_image"]["name"]);
    move_uploaded_file($_FILES["project_image"]["tmp_name"], $target_file);
    
    $sql = "INSERT INTO projects (name, description, image_path) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $description, $target_file);
    $stmt->execute();
    
    header("Location: home.php");
    exit();
}
?>