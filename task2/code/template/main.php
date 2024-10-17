<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?=$header?>  <!-- Проверяем, что $header корректно передан -->
    Добро пожаловать <?=$name?>! 
    <p>
        <?php echo $content;?>  <!-- Проверяем, что $content корректно передан -->
    </p>
    <?=$footer?>  <!-- Проверяем, что $footer корректно передан -->




</body>
</html>