<?php
    session_start();
    include 'db_conn.php';

if(isset($_POST['register'])){
    $uname =$_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cfpassword'];


    $sql_u = "SELECT * FROM users WHERE user_name = '$uname'";
    $sql_e = "SELECT * FROM users WHERE email = '$email'";
    $res_u = mysqli_query($conn, $sql_u) or die(mysqli_error($conn));
    $res_e = mysqli_query($conn, $sql_e) or die(mysqli_error($conn));

    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number = preg_match('@[0-9]@', $pass);
    $schar = preg_match('@[^\w]@', $pass);

    if(empty($uname) || empty($email) || empty($pass) || empty($cpass)){
        header("Location: reform.php?error=Full fill all the information");
        exit();
    }else if(mysqli_num_rows($res_u)>0){
        header("Location: reform.php?error=User name has been used");
        exit();
    }else if(mysqli_num_rows($res_e)>0){
        header("Location: reform.php?error=Email has been used");
        exit();
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: reform.php?error=Invalid email");
            exit();
        }elseif(!$uppercase || !$lowercase || !$number || !$schar || strlen($pass) < 8){
            header("Location: reform.php?error=Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
            exit();
        }elseif($pass != $cpass){
            header("Location: reform.php?error=Password did not match");
            exit();
        }else{
            $ins = "INSERT INTO users (user_name, email, password) VALUES ('$uname', '$email', '$pass')";
            $result = mysqli_query($conn, $ins) or die(mysqli_error($conn));
            echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php";</script>';
        }
    }
}