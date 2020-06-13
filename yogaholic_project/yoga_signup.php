<?php

session_start();
$conn= new mysqli("localhost","root","","yoga");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $TypeOfRequest=$_POST['for_page'];
    if($TypeOfRequest=="signup"){
        $user=$_POST['signup_username'];
        $pass_1=sha1($_POST['signup_password']);
        $pass_2=sha1($_POST['signup_password_confirmation']);
        $mail=$_POST['signup_email'];

        
    if($pass_1===$pass_2){
        $val=" INSERT INTO yoga_login(username,password,email) VALUES('$user','$pass_1','$mail')";
        if($conn->query($val)===TRUE){
             header('Location: login.html');
        }else{

            echo "registration unsucessfull";

        }

        
        }
    if($pass_1!==$pass_2){
        echo "please enter the same password";
    }
    }


    
    if($TypeOfRequest=="login"){
        $username = $_POST['login_username'];
        $password = sha1($_POST['login_password']);

        $sql="SELECT * FROM yoga_login WHERE username='$username' AND password='$password'";

        $result = $conn->query($sql);
        $Result2 = mysqli_query($conn,$sql);
        $CheckNumberOfUsers = mysqli_num_rows($Result2);
        $conn->close();

        if ($CheckNumberOfUsers==0) {
            die('invalid credentials');
        }
else{
        $_SESSION['username'] = $username;
        header('location:blogs.php');
        die();
}
        
    }

    

    mysqli_close($conn);
}















?>