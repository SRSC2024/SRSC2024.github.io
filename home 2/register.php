<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="main">
<h1>Register</h1>
<i>start your journey with SRSC</i>
<br><br>



<form action="register_post.php" method="POST">

<?php if (isset($user_error)){
    echo $user_error;
} ?>

<input type="text" name="username" id="username" placeholder="username"><br>
<?php if (isset($email_error)){
    echo $email_error;
} ?>
<input type="email" name="email" id="email" placeholder="email"><br>
<?php if (isset($pass_error)){
    echo $pass_error;
} ?>
<input type="password" name="password" id="password" placeholder="new password"><br>

<?php if (isset($gender_error)){
    echo $gender_error;
} ?>
<h7>Gender</h7>
<select name='gender' title='gender choose male or female' >
    <option disabled selected>choose</option>
    <option value='male'>MALE</option>
    <option value='female'>female</option>
</select>

<br>


<?php if (isset($year_error)){
    echo $year_error;
} ?>
<h7>year</h7>
<select name='year' title='choose year' >
    <option disabled selected>choose</option>
    <option value='first year'>FIRST YEAR</option>
    <option value='second year'>SECOND YEAR</option>
    <option value='third year'>THIRD YEAR</option>
    <option value='fourth year'>FOURTH YEAR</option>
    <option value='fifth year'>KEBAB</option>
</select>
<br>

<input type="submit" name="submit" id="submit" value='Register'><br>
</form>

<h3>OR</h3><br>

<a id='login' href="index.php">Login</a>

</div>
</body>
</html>