<?php
include("inc/connection.php");
if(isset($_POST["submit"])){
    $username = stripcslashes(strtolower($_POST["username"]));
    $email = stripcslashes($_POST["email"]);
    $password = stripcslashes($_POST["password"]);
    

    $username = htmlentities(mysqli_real_escape_string($conn,$_POST["username"]));
    $email = htmlentities(mysqli_real_escape_string($conn, $_POST["email"]));
    $password = htmlentities(mysqli_real_escape_string($conn, $_POST["password"]));
    $md5_pass = md5($password);




    if(isset($_POST['gender'])){
        $gender = ($_POST['gender']);
        $gender = htmlentities(mysqli_real_escape_string($conn,$_POST['gender']));
        if(!in_array($gender,['male','female'])){
            $gender_error = '<p id="error">Please choose gender not a text ! <p>';
            $err_s = 1;
        }
    }
    if(isset($_POST['year'])){
        $year = ($_POST['year']);
        $year = htmlentities(mysqli_real_escape_string($conn,$_POST['year']));
        if(!in_array($year,['first year','second year','third year','fourth year','fifth year'])){
            $year_error = '<p id="error">Please choose year not a text !</p>';
            $err_s = 1;
        }
    }
    $check_user = "SELECT * FROM users WHERE username='$username'";
    $check_result = mysqli_query($conn,$check_user);
    $num_row = mysqli_num_rows($check_result);
    if($num_row != 0){
        $user_error = '<sorry id="error">sorry username already exist , try another one <p>';
        $err_s = 1;
    }



if(empty($username)){
    $user_error = '<p id="error">please enter username</p>';
    $err_s = 1;
}elseif(strlen($username) < 9){
    $user_error = '<p id="error">your username needs to be more than 9 letters</p>';
}elseif(filter_var($username, FILTER_VALIDATE_INT)){
    $user_error = '<p id="error">Please insert a valid username not a number</p>';
    $err_s = 1;
}
if(empty($email)){
    $email_error = '<p id="error">please insert email</p>';
    $err_s = 1;
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_error = '<p id="error">please insert valid email</p>';
    $err_s = 1;
}

if(empty($gender)){
    $gender_error = '<p id="error">all fields are required</p>';
    $err_s = 1;
}
if (empty($year)){
    $year_error = '<p id="error">all fields are required</p>';
    $err_s = 1;
}
if (empty($password)){
    $pass_error = '<p id="error">please insert Password</p>';
    $err_s = 1;
    include('register.php');
}elseif(strlen($password) < 12){
    $pass_error = '<p id="error">your Password needs to be more than 12 letters</p>';
    $err_s = 1;
    include('register.php');
}
else{
    if(($err_s == 0) && ($num_rows == 0)){
        $sql = "INSERT INTO users(username,email,password,gender,year,md5_pass)
        VALUES ('$username','$email','$password','$gender','$year','$md5_pass')";
        mysqli_query($conn, $sql);
        header('location:index.php');

    }else{
        include('register.php');
    }


}

}





?>