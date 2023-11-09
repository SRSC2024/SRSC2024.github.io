<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="main">
<h1>Login</h1>
<i>Happy learning</i>
<br><br>




<br>
<form action="login.php" method="POST">
<?php if(isset($user_error)){
    echo $user_error;
}
?>

<input type="text" name="username" id="username" placeholder="username"><br>
<?php if(isset($pass_error)){
    echo $pass_error;
}
?>
<input type="password" name="password" id="password" placeholder="password"><br>
<input type="submit" name="submit" id="submit" value="Login"><br>

</form>

<h3>OR</h3>
<br>

<a id='register' href="register.php">Register</a>

</div>
</body>
</html>