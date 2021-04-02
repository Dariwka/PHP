<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Number of pokemons:</h1>
<?php 
$data = file_get_contents("data.json");
$json = json_decode($data);
/*/$array = json_decode( $data, true );

/*foreach($array as $val){//Print out the element if it isn't an array.
    if(!is_array($val)){
        echo $val, '<br>';}
}*/

echo '<pre>';
echo($json -> count);
echo '</pre>';
?>  

<?php
/*display name and url*/
$data = file_get_contents("data.json"); 
$json = json_decode($data, true);

for($i=0; $i<count($json['results']); $i++) {
    echo "Name is " . $json['results'][$i]["name"] . " and the url is " . $json['results'][$i]["url"] . "<BR>";
}
?>

<?php 
/*Display each pokemon with an index number (0 - 1118)*/

$data = file_get_contents("data.json"); 
$json = json_decode($data, true);

for($i=0; $i<count($json['results']); $i++) {
    echo "Index is " . $i . " and the name is " . $json['results'][$i]["name"] . "<BR>";
}
?>

<?php 
/*Split the array into chunks of 50 pokemons, limit the result to only show the 3rd group of 50 pokemons.*/
$data = file_get_contents("data.json"); 
$input_array = json_decode($data,true);
/*
$output = array_slice($json,3, 50);*/
/*print_r(array_slice($json, 3, 50));*/
/*print_r(str_split($json,3));*/


?>
</body>
</html>