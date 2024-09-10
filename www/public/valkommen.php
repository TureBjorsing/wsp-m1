<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Välkommen</title>
</head>
<body>
    <?php
        $namn = $_POST['namn'];
        echo 'Välkommen ' . $namn . '!';

        $nr = 3;
        echo("talet är \n $nr <br>");
        echo('talet är \n $nr <br>');
    ?>
</body>
</html>