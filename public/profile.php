<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/ajax.js"></script>
    <title>Вход</title>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <?include "../templates/header.php"?>
        <div class="page__name center">
            <h1 class="page__heading">PROFILE</h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li>
                    <p class="active">Profile</p>
                </li>
            </ul>
        </div>
        <div class="profile">
            <h1 class="profile__header">Добро пожаловать!</h1>
            <button class="profile__button">Выход</button>
        </div>
    </div>
    <?include "../templates/footer.php"?>
</div>
</body>
