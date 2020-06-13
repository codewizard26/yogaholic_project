<?php
include_once('common.php');
if(isset($_SESSION["username"])){
  $UserAuthenticated = 1;
  $username = $_SESSION["username"];
}
else{
  $UserAuthenticated = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen and (min-width: 900px)" href="widescreen.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="smallscreen.css">

    <title>view-post</title>
    
  
  
  </head>
  <body>
<div class="back-image">
<?php 
  
  if($UserAuthenticated==1){
?>

<a href="logout.php"><button style="float:right;display:inline-block; margin-top: 0.4rem;" class="btn btn-danger btn-lg">Signout</button></a>
<?php
  }
  if($UserAuthenticated==0){
    ?>
<a href="login.html"><button style="float:right;display:inline-block; margin-top: 0.4rem;margin-right:1rem;" class="btn btn-primary btn-lg">Login</button></a>
    <?php
  }
  ?> 
  <h1 class="text-white"><i class="fa fa-hacker-news" aria-hidden="true "></i> Yogaholic</h1>
  <div class="animate">
    <div class="heading-primary">
      <span class="heading-primary-main">Experience</span>
      <span class="heading-primary-sub">The World Around You</span>
      <a class="discover" href="#">discover</a>
    </div>

  </div>

  
</div>
  
</div>
<div class="shadow p-3 mb-5 bg-white rounded">
  <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  <centre> <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav" style="text-align: center;">
      <li class="nav-item active">
        <a class="nav-link" href="yoga.html">Home <span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="blogs.php">Blogs</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="about.html">About</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link " href="contact.html" >Contact</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
  </div></centre>
  </nav>
</div>






<?php

include_once("common.php");
$PostID = strip_tags(addslashes($_GET['id']));
$sql= "SELECT * FROM yoga_blogs where id='$PostID'";
$MainQuery = mysqli_query($conn,$sql);
while($value=mysqli_fetch_assoc($MainQuery)){
    $PostTitle = $value['title'];
    $FullArticle = $value['full_blog'];
}



?>
<div class="container">
<div class="card" style="margin:4rem;">
    <div class="card-header bg-primary text-white">
        <h1><?php echo $PostTitle; ?></h1>
    </div>
    <div class="card-body">
        <p><?php echo $FullArticle; ?></p>
    </div>
</div>
</div>







<div class="" style="background-image:url(bottom.jpg);background-size:cover;background-position:center;background-repeat:no-repeat;height:25rem;padding:2rem;opacity:1;">
    <div class="row mt-5" style="margin-top:3rem;">
      <div class="col-sm"><div class="mt-4" style="color:white;text-transform:uppercase; text-center;" >
        <p>&copy; Yogaholic designing <br> &nbsp;&nbsp;&nbsp;&nbsp;community <br> &nbsp;&nbsp;&nbsp;&nbsp;all right reserved </p>
      </div></div>
    
    
    <div class="col-sm">
      <div class="mt-4" style="color:white;text-transform:uppercase; text-center;" >&nbsp;&nbsp;&nbsp;navigation<br><br>
      <ul>
      <a href="index.html" style="text-decoration:none;color:white;" ><li>home</li></a>
      <a href="blogs.php" style="text-decoration:none;color:white;"> <li>blogs </li></a>
      <a href="about.php" style="text-decoration:none;color:white;"> <li>about</li></a>
      <a href="contact.html" style="text-decoration:none;color:white;"> <li>contact</li></a>
      
      </ul>
      </div>
    </div>
    <div class="col-sm"><div class="mt-4" style="color:white;text-transform:uppercase;" > for any suggestions and feedback you can connect us through the following platforms<br>
    whatsapp:+1(567)244-1535<br>
    mail us: <a href="https://www.nikhilmishra2608@gmail.com" style="text-transform:lowercase;text-decoration:none;color:white;">www.nikhilmishra2608@gmail.com</a> 
    </div>
    </div>


</div>

<div class="footer text-white text-center" style="margin-top:3rem;">
    &copy; designed by <span>||</span>  code wizard
<div>
 
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>