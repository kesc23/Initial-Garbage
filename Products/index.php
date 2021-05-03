<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('products.php');?>
    <?php
        for($i = 0; $i < 6 ;$i++) {
            echo '<span>';
            echo '<p>' . $Product1->name; '</p>';
            echo '<p>' . $Product1->brand; '</p>';
            echo '<p>' . $Product1->weight . 'g</p>';
            echo '</span>';
        }
    ?>
</body>
</html>