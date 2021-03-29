<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Counter</title>
</head>
<body>
Numbers from 0 to 10 in Finnish language:
<?php 
$numbers = rand(0,10);
switch ($numbers) {
    case 0:
        echo "$numbers nolla";
        break;
    case 1:
        echo "$numbers yksi";
        break;
    case 2:
        echo "$numbers kaksi";
        break;
    case 3:
        echo "$numbers kolme";
        break;
    case 4:
        echo "$numbers neljä";
        break;
    case 5:
        echo "$numbers viisi";
        break;
    case 6:
        echo "$numbers kuusi";
        break;
    case 7:
        echo "$numbers seitsemän";
        break;
    case 8:
        echo "$numbers kahdeksan";
        break;
    case 9:
        echo "$numbers yhdeksän";
        break;
    case 10:
        echo "$numbers kymmenen";
        break;
}
?>

    
</body>
</html>