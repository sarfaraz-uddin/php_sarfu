
<?php //session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="POST">
        <label>Email:</label>
        <input type="text" name="email" id="email" placeholder="your email here"><br>
        <label>Password</label>
        <input type="password" name="pass" id="pass" placeholder="your password here"><br>
        <button type="submit" name="login">Login</button>

    </form>
    <?php
    
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $ema = 'sarfu@gmail.com';
    $pas = '1234';

    if ($ema===$_POST['email'] && $pas===$_POST['pass']) {
        //$_SESSION['auth']=true;
        setcookie("user", $ema, time() + 5, "/" );
        header('location: swap.php');
    } else {
         header('location: ./index.php');
    }
}


    ?>
</body>
</html>