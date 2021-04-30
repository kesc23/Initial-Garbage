<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="formulary">
        <form action="file-01.php" method="post">
        Name: <input type="text" name="name" class="form-1"><br>
        City: <input type="text" name="city" class="form-1"><br>
        Color: <input type="text" name="color" class="form-1"><br>
        <button type="submit">Submit</button>
        </form>
        <?php
        $name = $_POST["name"];
        $city = $_POST["city"];
        $color = $_POST["color"];
        echo 'Hi!, ' . $name . '. I seen your city is ' . $city . ' and your favorite color is ' . $color;
        ?>
    </div>
    
</body>
</html>