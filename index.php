<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H-chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php require_once "templates/header.php"?>
    <?php
session_start();
    if (isset($_SESSION['email']))
        echo'';
    else
        header("Location: /auth.php");
    ?>
    <a href="actions/exit.php">Выйти</a>

    <main class="container users p-3">
        <?php
                session_start();
                $email = $_SESSION['email'];
                $pdo = new PDO("mysql:host=localhost;dbname=H-chat;", "root", "");

                $sql = "SELECT name FROM users WHERE email != '$email'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $users = $query->fetchAll(PDO::FETCH_OBJ);
                foreach ($users as $user) {
                    echo '        <div class="d-flex contact mt-5 bg-light">
            <img class="rounded-circle" style="width: 8rem; height: 8rem;" src="Images/empty.jpg" alt="empty photo" >
            <div style="margin-left: 2rem;">
                <h4>'. $user->name .'</h4>
                <p>Ты не забыл про день рождения Андрея?</p>
                <a href="/chat.php" class="btn btn-primary">В чат</a>
              </div>
        </div>';
                }
        ?>
    </main>
</body>
</html>