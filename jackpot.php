<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot game</title>
</head>
<body>
<?php
    $randNr = rand(1,20);
    $winNr = 5;
    if ($randNr == $winNr) {
        echo "Your lucky number is $winNr";
    } else {
        echo "no win";
    }
?> 
</body>
</html>