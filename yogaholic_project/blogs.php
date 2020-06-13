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
     <title>Blogs</title>



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
 
    </form>
  </div>
</nav>
  

  

  <div class="shadow p-3 mb-5 bg-white rounded">
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <centre> <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav" style="text-align: center;">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item active">
                    <a class="nav-link" href="blogs.php">Blogs</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item ">
                    <a class="nav-link" href="about.php">About</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item ">
          <a class="nav-link " href="contact.php" >Contact</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;
      </ul>
    </div>
    </centre>
    </nav>
  </div>
<div>



  <div class="container mb-3" style="margin-bottom:3rem;margin-top:2rem;">
  <?php
 if($UserAuthenticated==1){
  echo '<h2>hello<h2>'.$username ;
 }
 else{
   echo "<h3>Hello! login to post your blog</h3>";
 }
  ?>
<br>
<br>
<?php if ($UserAuthenticated==1){
  ?>
 <div>
   <div class="card mt-4 shadow" >
     <div class="card-header bg-dark text-white">
       Express your ideas..
     </div>
     <div class="card-body">
       <form method="POST" action="yoga_blogs.php">
      <input required type="text" class="form-control" placeholder="Title" name="title"><br>
     <textarea required class="form-control" rows="5" cols="50" placeholder="enter your blog here" name="full_blog"></textarea><br>
     <button class="btn btn-primary">Create Post</button>
</form> 
  </div>
   </div>
 </div>
 <br>

<?php }
?>

<?php if ($UserAuthenticated==1)?>
  <div class="card mt-3 ">
    <div class="card-header bg-dark text-white">
Recent Blogs
</div>
<div class="card-body">
<div class="row">
<?php 
$FetchBlogs = "SELECT * FROM yoga_blogs ORDER BY id DESC";
$MainQuery = mysqli_query($conn,$FetchBlogs);
$CheckNumberOfBlogs = mysqli_num_rows($MainQuery);
if($CheckNumberOfBlogs==0){
  echo "No Blog Article Available";
}
else{
while($row = mysqli_fetch_assoc($MainQuery)){
 ?>

<div class="col-md-4">
  <div class="card shadow" style="margin:1.6rem; ">
    <div class="card-header">
    <strong><?php echo $row['title']; ?></strong>
    </div>
  <div class="card-body text-truncate" style="font-size:20px;">
  <?php echo $row['full_blog']; ?> <br>
  By - <?php echo $row['username']; ?>
</div>
<div class="card-footer" >
   <div class="row">
<div class="col-lg-6"><a href="view-post.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-block" style="width:100%;">Read More</a></div>
</div>
</div>
</div>
</div>

<?php
}
}
?>
</div>
</div>
</div>



  </div>


  <?php 
if($UserAuthenticated==0){
  ?>
  
  <div class="noo-vc-row row  bg-image" style="background-image: url(http://wp.nootheme.com/yogi/wp-content/uploads/2015/04/member-ship-bg.jpg); padding: 20px; padding-bottom: 20px;width:100%;margin-left:0rem;">
  <div class="noo-vc-col text-center col-md-12 "><hr class="noo-gap"><style scoped="">#noo-cta-btn-4 > a.btn:hover {  color: #ffffff; }</style>
  <div id="noo-cta-btn-4" class="jumbotron noo-cta-btn text-center">
  <h2 class="cta-title">Join our yogaholic community</h2>
  <p class="cta-message">express and explore more about yoga</p>
  <a href=""><a href="login.html" class="btn metro btn-default" style=" color: #ffffff; background-color: #2a2a2a; padding-left:  70px; padding-right:  70px;" role="button">
  Sign up now
  </a></a>
  </div><hr class="noo-gap"></div>
  </div>


<?php } 
?>

    <div class="" style="background-image:url(bottom.jpg);background-size:cover;background-position:center;background-repeat:no-repeat;padding:1rem;opacity:1;">
    <div class="row mt-5" >
      <div class="col-sm"><div class="mt-4" style="color:white;text-transform:uppercase; text-center;" >
        <p>&copy; Yogaholic designing <br> &nbsp;&nbsp;&nbsp;&nbsp;community <br> &nbsp;&nbsp;&nbsp;&nbsp;all right reserved </p>
      </div></div>
    
    
    <div class="col-sm">
      <div class="mt-4" style="color:white;text-transform:uppercase; text-center;" >&nbsp;&nbsp;&nbsp;navigation<br><br>
      <ul>
      <a href="index.html" style="text-decoration:none;color:white;" ><li>home</li></a>
      <a href="blogs.php" style="text-decoration:none;color:white;"> <li>blogs </li></a>
      <a href="about.php" style="text-decoration:none;color:white;"> <li>about</li></a>
      <a href="contact.php" style="text-decoration:none;color:white;"> <li>contact</li></a>
      
      </ul>
      </div>
    </div>
    <div class="col-sm"><div class="mt-4" style="color:white;text-transform:uppercase;" > for any suggestions and feedback you can connect us through the following platforms<br>
    whatsapp:+1(567)244-1535<br>
    mail us: <a href="https://www.nikhilmishra2608@gmail.com" style="text-transform:lowercase;text-decoration:none;color:white;">www.nikhilmishra2608@gmail.com</a> 
    </div>
    </div>


</div>

<div class="footer text-white text-center" style="margin-top:5rem;">
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
  