<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*define (`ONE_SECOND_IN_MOLISECONDS`, 1000);
    echo ONE_SECOND_IN_MOLISECONDS;
    define (`ONE_SECOND_IN_MOLISECONDS`, 2000); //legal, but won't work
    echo ONE_SECOND_IN_MOLISECONDS;*/

    /*function test() {
        $foo = "local PHP variable";
        echo " foo in the local scope:" . $foo . "<br>";
        echo " foo in the local scope:" . $GLOBALS["foo"] . "<br>";  
    }

    $foo = " global PHP variable";
    test();
    print_r($GLOBALS);*/

    /*$students = array (
        `student1` => array (
            `name` => `Harry`
            `age` => 15
            `gender` => `male`)
    )
    $popped_student = array_pop($students);
    echo "A student has been popped!$popped_student" ;*/
    
    https://www.avoindata.fi/data/fi/dataset/veden-reaaliaikainen-lampotila-helsingin-uimarannoilla
  
    ?>
</body>
<script>
function test(){
    let foo =`local variable`
    console.log(foo);
    console.log(window.foo); // undefied if let foo, if var foo - work
}
let foo = `global`; // var 
test();
</script>
</html>