    <!DOCTYPE html>
    <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      <title>Artist Corner</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-mutted fixed-top py-3" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="../HOMEPAGE/index.html">The ArTom Gallery</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-distribute-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1 1.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5zm0 13a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5z"/>
            <path d="M2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z"/>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav nav-tabs ml-auto my-2 my-lg-0" role="tablist">
            <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#Exhibitions">Exhibitions</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle js-scroll-trigger text-warning" data-toggle="dropdown" href="">View art</a>
              <div class="dropdown-menu">
               <a class="dropdown-item" href="../LOGIN/gallery.php">Flower art</a>
               <a class="dropdown-item" href="../LOGIN/gallery1.php">Abstract</a>
               <a class="dropdown-item" href="../LOGIN/gallery2.php">Painting</a>
             </div>      
           </li>
           <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#contact">Contact</a></li>
           <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="loginpage.php">Logout</a></li>
         </ul>
       </div>
     </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1>Artist</h1>
        <p>Upload your art</p>
      </div>
    </div>
    <div class="container-fluid">
    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="cartegory">category</label>
            <input type="text" class="form-control" name="category" id="category" placeholder="Enter Category" required>
          </div>
        </div>
        <div class="col-sm-6"> 
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
          </div>
        </div>
        <div class="col-sm-6">  
          <div class="form-group">
            <label for="name">Image title</label>
            <input type="text" class="form-control" name="imageTitle" id="name" placeholder="Enter title" required>
          </div>
        </div>
        <div class="col-sm-6">      
          <div class="form-group">
            <label >Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description"required>
          </div>
        </div>
        <div class="col-sm-6">  
         <div class="form-group">
          <label >Price</label>
          <input type="number" class="form-control" name="price" id="price" placeholder="Purchase price" required>
        </div>
      </div>

      <input class="btn btn-warning" type="file" name="file">
      <input class="btn btn-group-sm btn-outline-warning" type="submit" name="submit_art" value="Upload">
    </div>
    </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script-->

          <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      </body>
    </html>