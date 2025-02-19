<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $pdo = new PDO("mysql:host=localhost;dbname=H-chat;", "root", "");

    $sql="INSERT INTO users(name, email, password) VALUES(?,?,?)";
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email, $password]);

    header("Location: /auth.php");