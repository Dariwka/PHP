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

$new_arr = array_chunk($json['results'], 50);
echo `<h4>3rd group of 50 pokemons</h4>`;
echo `<pre>`;
print_r($new_arr[2]);
echo `<pre>`;
echo `<hr>`;

?>

</body>
</html>