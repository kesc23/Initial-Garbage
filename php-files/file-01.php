<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="formulary">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Name: <input type="text" name="name" class="form-1"><br>
        City: <input type="text" name="city" class="form-1"><br>
        Color: <input type="text" name="color" class="form-1"><br>
        <button class="btn" type="submit">Enviar</button>
        </form>
        <?php
            $name = $_POST['name'];
            $city = $_POST['city'];
            $color = $_POST['color'];
            echo 'Hi!, ' . $name . '. I seen your city is ' . $city . ' and your favorite color is ' . $color;
        ?>
    </div>
    
</body>
</html>