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
    
    <div class="d-flex contact bg-light container">
        <img class="rounded-circle" style="width: 5rem; height: 5rem; padding: .5rem;" src="Images/empty.jpg" alt="empty photo" >
            <h4 style="margin: auto auto auto .5rem;">Степан</h4>
            <a style="margin: auto 1rem auto auto ;" href="/index.php" class="btn btn-primary"><h5 class="content">Назад</h5></a>
    </div>

    <main class="container chat p-3">
        <div class="msg">
            <h5 class="content">Привет</h5>
        </div>
        <div class="msg">
            <h5 class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit minus perferendis ratione optio quas doloribus maxime? Ab magni voluptatem provident saepe suscipit ipsa, iure esse quasi quidem cum temporibus.</h5>
        </div>
        <div class="mymsg">
            <h5 class="content">Привет</h5>
        </div>
        <div class="mymsg">
            <h5 class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit minus perferendis ratione optio quas doloribus maxime? Ab magni voluptatem provident saepe suscipit ipsa, iure esse quasi quidem cum temporibus.</h5>
        </div>
        <div class="msg">
            <h6 class="content">Ясно</h6>
        </div>
        <div class="msg">
            <h5 class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit minus perferendis ratione optio quas doloribus maxime? Ab magni voluptatem provident saepe suscipit ipsa, iure esse quasi quidem cum temporibus.</h5>
        </div>
        <div class="msg">
            <h5 class="content">Привет</h5>
        </div>
        <div class="msg">
            <h5 class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit minus perferendis ratione optio quas doloribus maxime? Ab magni voluptatem provident saepe suscipit ipsa, iure esse quasi quidem cum temporibus.</h5>
        </div>
        <div class="mymsg">
            <h5 class="content">Привет</h5>
        </div>
        <div class="mymsg">
            <h5 class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit minus perferendis ratione optio quas doloribus maxime? Ab magni voluptatem provident saepe suscipit ipsa, iure esse quasi quidem cum temporibus.</h5>
        </div>
        <div class="mymsg">
            <h6 class="content">Ясно</h6>
        </div>
        <div class="msg">
            <h5 class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit minus perferendis ratione optio quas doloribus maxime? Ab magni voluptatem provident saepe suscipit ipsa, iure esse quasi quidem cum temporibus.</h5>
        </div>
        <div class="mymsg">
            <h6 class="content">Ясно</h6>
        </div>
        <div class="mymsg">
            <h5 class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit minus perferendis ratione optio quas doloribus maxime? Ab magni voluptatem provident saepe suscipit ipsa, iure esse quasi quidem cum temporibus.</h5>
        </div>
    </main>
    <div class="fixed-bottom sticky-bottom bg-white container">
        <form action="send.php" class="d-flex ">
            <input type="text" class="form-control sticky-bottom">
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>