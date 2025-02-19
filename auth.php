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

<?php
session_start();
    if (isset($_SESSION['email']))
      header("Location: /index.php");
    ?>

  <?php require_once "templates/header.php"?>

  <h1 class="text-center mt-3">Здравствуйте</h1>

  <main class="container chat p-3">
        <form style="width: 50%; margin: auto;" method="post" action="actions/auth.php">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Эл. почта:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Пароль:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="acc.php">Создать новый аккаунт</a>
    </main>
</body>
</html>