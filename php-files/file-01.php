<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if (!isset($_POST['name'])){
            $name = null;
        }else{
            $name = $_POST['name'];
        }

        if (!isset($_POST['city'])){
            $city = null;
        }else{
            $city = $_POST['city'];
        }

        if (!isset($_POST['color'])){
            $color = null;
        }else{
            $color = $_POST['color'];
        }

        function getName($name) {
            return $name = $_POST['name'];
        }
        function getColor($color) {
            return $color = $_POST['color'];
        }
        function getCity($city) {
            return $city = $_POST['city'];
        }

    ?>

    <div id="formulary">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Name: <input type="text" name="name" class="form-1" value="<?php echo $name;?>"><br>
        City: <input type="text" name="city" class="form-1" value="<?php echo $city;?>"><br>
        Color: <input type="text" name="color" class="form-1" value="<?php echo $color;?>"><br>
        <button class="btn" type="submit">Enviar</button>
        </form>
        <div>
            <?php
                if (!isset($color) && !isset($city) && !isset($name)) {
                    echo '  ';
                } else {
                echo 'Hi, ' . $name . '! I seen your city is ' . $city . ' and your favorite color is ' . $color;
                }
            ?>
        </div>
    </div>
    
</body>
</html>