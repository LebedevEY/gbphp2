<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="view/js/jquery.js"></script>
    <script src="view/js/ajax.js"></script>
    <title>Админка</title>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <?php include "./templates/header.php" ?>
        <h1>Здесь будет админка</h1>
        <table class="admin_table" border="1px" width="100%">
            <tr>
                <th width="15%">Название</th>
                <th width="50%">Описание</th>
                <th width="20%">Изображение</th>
                <th width="5%">Цена</th>
                <th width="10%"></th>
            </tr>
            <?
               foreach ($goods as $item) {
                   include "./templates/table.php";
               }
            ?>
        </table>
        <form style="margin: 0 auto 20px; text-align: center" method="post" action="index.php?c=profile&action=exit">
            <button type="submit" class="profile__button">Выход</button>
        </form>
    </div>
    <?php include "./templates/footer.php" ?>
</div>

</body>
</html>
