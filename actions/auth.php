<?php session_start(); ?>

<?php
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $pdo = new PDO("mysql:host=localhost;dbname=H-chat;", "root", "");

    $sql = "SELECT id FROM users WHERE email = ? AND password = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$email, $password]);

    if($query->rowCount() == 0)
        header("Location: /auth.php");
    else{
        
        $_SESSION["email"] = $email;
        header("Location: /");
    }