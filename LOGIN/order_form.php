<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <title>Order Placement</title>
</head>
<body class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top py-2" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger text-warning" href="../HOMEPAGE/index.html">The ArTom Gallery</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-distribute-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M1 1.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5zm0 13a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5z"/>
                      <path d="M2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z"/>
                  </svg>
              </button>
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
</div>
<br>
<br>
<br>
<div class="container">
    <div class="text-center py-1">
        <h1>Order Form.</h1>
        <p class="lead">Fill in the form below to place your order here for the selected art.</p>
    </div>
</div>

    <div class="container">
        <h4>Billing Adress</h4>
        <form action="orderset.php" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstname" class="col-form-label">First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="John" required>
                                <div class="invalid-feedback">Valid first name required</div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastname" class="col-form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Legend" required>
                                <div class="invalid-feedback">Valid last name required</div>
                            </div>

                            <div class="col-md-8">
                                <label for="emailaddress" class="col-form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="email" name="email" class="form-control" placeholder="jlegend@gmail.com" required>
                                </div>
                                <div class="invalid-feedback">Valid last name required</div>
                            </div>

                            <div class="col-md-4">
                                <label for="homephone" class="col-form-label">Home Phone</label>
                                <div class="input-group">
                                    <span>
                                        <select name="phone" class="form-control">
                                            <option value="">+254</option>
                                            <option value="+256">+256</option>
                                            <option value="+255">+255</option>
                                            <option value="+257">+257</option>
                                        </select>
                                    </span>
                                    <input type="number" name="homephone" class="form-control" required>
                                </div>
                                <div class="invalid-feedback">Valid phone number required</div>
                            </div>


                            <div class="col-md-6">
                                <label for="country" class="col-form-label">Country</label>
                                <select name="country" class="form-control">
                                    <option value="">Choose...</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Tanzania">Tanzania</option>
                                </select>
                                <div class="invalid-feedback">Select country</div>
                            </div>

                            <div class="col-md-6">
                                <label for="address" class="col-form-label">Address</label>

                                <input type="text" name="address" class="form-control" required>
                            </div>

                        </div>
                        <br>
                    <div class="container">
                        <h4>Art Order Details</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="artname" class="col-form-label">Art Name</label>
                                <input type="text" name="artname" class="form-control" placeholder="Brush Rose" required>
                                <div class="invalid-feedback">Valid art name required</div>
                            </div>

                            <div class="col-sm-6">
                                <label for="description" class="col-form-label">Art Description</label>
                                <input type="text" name="desc" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="request" class="col-form-label"> Special Request <span class="text-muted">Optional</span> </label>
                                <input type="text" name="request" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <label for="quantity" class="col-form-label">Quantity</label>
                                <input type="number" name="quantity" class="form-control" placeholder="1" required>
                            </div>
                        </div>
                        <br><input type="submit" name="order" class="btn btn-group-lg btn-outline-warning" value="Order">
                        <br>
                    </div>
                </div>  
        </form>
</div>
    <?php 
    if (isset($_POST['submit'])) {
       echo
    '<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email Address</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>'.$_POST["firstname"].'</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>'.$_POST["lastname"].'</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>'.$_POST["email"].'</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>        

      </table>'; 
  }?>
<section class="page-section bg-light" id="contact">
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
        </section>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>