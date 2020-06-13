
<!doctype html>
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
    <title>Contact</title>

      
  </head>
  <body class="bg-light">
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


<div class="shadow p-3 mb-5 bg-white rounded">
  <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  <centre> <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav" style="text-align: center;">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="blogs.php">Blogs</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
    </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
    </li>
      <li class="nav-item active">
        <a class="nav-link " href="contact.php" >Contact</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
    </li>
    </ul>
  </div></centre>
</div>
</nav>

  
  </div>
</div>

<div class="container">
<h1 style="font-weight: 600;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Contact Us</h1>
<blockquote>
  
  “Through the very act of asking people, I connected with them. And when you connect with them, people want to help you. It’s kind of counterintuitive for a lot of artists — they don’t want to ask for things. It’s not easy to ask. … Asking makes you vulnerable.”
  Feel free to give your suggestions and queries, we will always try to make best out of your suggestions, and help you in the most efficient way  


</blockquote>

</div>




<div class="container mt-9">
	<div class="row">
		<div class="col-lg-6 offset-lg-3">
		 <div class="card mt-4" style="margin-top: 2rem;">
			 <div class="card-header bg-primary text-white">
				 <h4>Contact</h4>
			 </div>
			 <div class="card-body">
			  <form  method="post" action="process.php">
				 
							 <div class="form-group">
								 <label for="name">Name</label>
								 <input type="text" placeholder="Enter Your Name" name="fname" class="form-control" required id="name">
							 </div>
				  
							 <div class="form-group">
								 <label for="name">Email</label>
								 <input type="email" placeholder="Enter Your Email" name="email" class="form-control" required id="email">
							 </div>

							 <div class="form-group">
                 <label for="name">Message</label>
                 <textarea class="form-control" name="message" required placeholder="Text....."></textarea>
                 
							 </div>

				  
				  <button class="btn btn-outline-primary">Submit</button>
			  </form>
			 </div>
		 </div>
		</div>
	</div>
 </div>





 <?php 
if($UserAuthenticated==0){
  ?>
  
  <div class="noo-vc-row row  bg-image" style="background-image: url(http://wp.nootheme.com/yogi/wp-content/uploads/2015/04/member-ship-bg.jpg); padding-top: 20px; padding-bottom: 20px; margin-top:3rem;width:100%;">
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


