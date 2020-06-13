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
    <title>about</title>

    
  
  
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
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link" href="blogs.php">Blogs</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link " href="contact.php" >Contact</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
  </div></centre>
  </nav>
</div>




<div class="bg-light" style="width:100%;">
    <div class="container text-center " style="font-size:45px; text-transform:uppercase; font-weight:bold; padding:2rem;">
      about
    </div>
      <div class=" container mt-1 text-center " style="font-size:35px;text-transform:none; margin-bottom:5rem; ">
      Any intelligent fool can make things bigger, more complex and more violent. It takes a touch of genius – and a lot of courage – to move in the opposite direction 
    </div>
</div>
<div class="back_img" style="background-color:rgb(244, 127, 10); margin-bottom:3rem;">
<div class="container" >
  <div class="row" >
    <div class="col" style="margin:3rem;">
    <img src="my.jpg" alt="my img" class="img-thumbnail img-fluid shadow-lg"  >
    </div>
    <div class="col" style="margin-top:5rem;margin-left:30px;margin-right:25px;width:100%;padding:2rem;">
    <p style="text-align:justify;">

      Hello, I am Nikhil Mishra a junior web developer having good knowledge in front end web development as well as back end , i also have interest in ux and ui designing 
      and their are my several projects on various designing platforms. I always try to give my best on each and every projects.I build websites that delight and inform. I do it well.I’m curious, and I enjoy work that challenges me to learn something new and stretch in a different direction.
       I do my best to stay on top of changes in the state of the art so that I can meet challenges with tools well suited to the job at hand.
    </p>
    </div>
  </div>
</div>
  </div>



<div class="container">
  <div class="row">
    <div class="col-sm" style="padding:2rem; margin-top:2rem;">
    <section class = "claims clearfix data-block ">
        <article class = "claim" style = "margin-left:2rem ;">
            <header class = "clearfix">
                <i class = "fa fa-search"></i>
                <h2>Check out my latest projects</h2>
            </header>
            <p style="text-align:justify; margin-top:1rem;">
           I am working on various project that are related to web development and ux/ui designing we will notify you whenever our new project is relased
           you can also give your ideas  </p>
        </article>
    </div>
    <div class="col-sm" style="padding:2rem; margin-top:2rem;">
    <article class = "claim">
            <header class = "clearfix">
                <i class = "fa fa-star"></i>
                <h2>guarantee five star quality work </h2>
            </header>
            <p style="text-align:justify; margin-top:1rem;">
            I always try that my work gets more and more appreciated by the people for whom i work and is its always a high quality work so that more and more people can get to know about my work
            </p>
    
        </article>
    </div>
    <div class="col-sm" style="padding:2rem; margin-top:2rem;">
    <article class = "claim">
            <header class = "clearfix">
                <i class = "fa fa-stack-exchange"></i>
                <h2>stay connected by reading</h2>
            </header>
            <p style="text-align:justify; margin-top:1rem;">
            I am always trying that the blogs on my pages are usefull for the people whosoever visits my page and they can gets lots on information about the topic so stay connected and stay informative
            </p>
  </section>
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









<div class="" style="background-image:url(bottom.jpg);background-size:cover;background-position:center;background-repeat:no-repeat;padding:2rem;opacity:1;">
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
      <a href="contact.php" style="text-decoration:none;color:white;"> <li>contact</li></a>
      
      </ul>
      </div>
    </div>
    <div class="col-sm"><div class="mt-4" style="color:white;text-transform:uppercase;" > for any suggestions and feedback you can connect us through the following platforms<br>
    whatsapp:+1(567)244-1535<br>
    mail us: <a href="https://www.nikhilmishra2608@gmail.com" style="text-transform:lowercase;text-decoration:none;color:white;">nikhilmishra2608@gmail.com</a> 
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