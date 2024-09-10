<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <?php
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];

        $points = 0;

        if($q1 == 25)
            $points++;
        if(strtolower($q2) == 'paris')
            $points++;
        if($q3 == 10)
            $points++;
        if(strtolower($q4) == 'stockholm')
            $points++;
        if($q5 == 5)
            $points++;
        if(strtolower($q6) == 'köpenhamn')
            $points++;

        if($points < 2)
            echo '<p>Läs på mer och försök igen<p>';
        elseif($points > 2 && $points < 5)
            echo '<p>Godkänd<p>';
        elseif($points == 5)
            echo '<p>Bra, du behärskar det mesta<p>';
    ?>
</body>
</html>