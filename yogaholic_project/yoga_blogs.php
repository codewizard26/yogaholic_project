<?php 

include_once('common.php');
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $title=$_POST['title'];
    $full_blog=$_POST['full_blog'];
    $username=$_SESSION['username'];
    $sql= "INSERT INTO yoga_blogs (title,full_blog,username) VALUES ('$title','$full_blog','$username')";
    

    if($conn->query($sql)===TRUE){
        header('location:blogs.php');
    }else{
        echo "<strong>Error :</strong>";
    }

    mysqli_close($conn);
    
}


?>