<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pension</title>
</head>
<body>
    <?php
        $namn = $_POST['namn'];
        $age = $_POST['age'];
        $pension = 65 - $age;

        echo "Du, " . $namn . " har " . $pension . " år kvar till pension!";
    ?>
</body>
</html>