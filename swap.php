<!-- swap two numbers in php -->
<?php 
//     session_start();
// $isLoggedIn=isset($_SESSION['auth']);
// if(!$isLoggedIn){
//     echo"login gareko xahina yesle <br>";
// } else{
//     echo"login garisakyo yelle <br>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping</title>
</head>
<body>
    
    <?php
        echo 'before swapping' . '<br>';
        $a=2;
        $b=4;
        echo "a=$a"."<br>";
        echo "b=$b"."<br>";

        echo "after swapping" ."<br>";
        $temp=$a;
        $a=$b;
        $b=$temp;
        echo "a=$a" ."<br>";
        echo "b=$b" ."<br>";
    ?>
</body>
</html>