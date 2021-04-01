<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="en">
<head>
<link rel="stylesheet" href="login.css">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
</head>
   <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-mutted fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../HOMEPAGE/index.html">The ArTom Gallery</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav nav-tabs ml-auto my-2 my-lg-0" role="tablist">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#Exhibitions">Exhibitions</a></li>
                       
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle js-scroll-trigger text-warning" data-toggle="dropdown" href="">View art</a>
                          <div class="dropdown-menu">
                               <a class="dropdown-item" href="gallery.php">Flower art</a>
                              <a class="dropdown-item" href="gallery1.php">Abstract</a>
                              <a class="dropdown-item" href="gallery2.php">Painting</a>

                          </div>      
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      <div class="sidenav bg">
         <div class="login-main-text">
            <h1 class="display-4">Register<br> Login Page</h1>
            <p class="text-dark">Login or register here to continue.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="login.php" method="POST" name="frm">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="username"required="required">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" required="required" name="passcode">
                  </div>
                  <input type="submit" name="submit" class="btn btn-black" value="Login">
                  <a href="register_form.php" class="btn btn-success" name="register"> Register</a>
               </form>
            </div>
         </div>
      </div>
      <!--section class="page-section bg-light" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Want to speak to us or leave a message, give us a call or send us an email. We'll get back to you as soon as possible! </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+254 712 345 000</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i><a class="d-block" href="@">artomgeneral@gmail.com</a>
                    </div>
                </div>
            </div>
        </section-->
      <footer class="bg-light pt-5 mt-5 align-bottom">
            <div class="container-fluid"><div class="small text-right text-muted">Copyright ARTOM ART GALLERY</div></div>
        </footer>
   </body>
</html>
<?php
session_destroy();
?>
