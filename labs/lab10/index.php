<!DOCTYPE html>
<html>
    <head>
        <title> CSUMB: Pet Shelter </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            body {
                text-align: center;
            }
        </style>
   
    </head>
    <body>
        
	<!--Add main menu here -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pets.php">Adoptions</a>
              </li>
            </ul>
          </div>
        </nav>
        
        
        
        
        <div class="jumbotron">
          <h1> CSUMB Animal Shelter</h1>
          <h2> The "official" animal adoption website of CSUMB </h2>
        </div>
        
            <!-- Add Carousel here -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/alex.jpg" alt="First slide" width= "auto" height="700">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/bear.jpg" alt="Second slide" width= "auto" height="700">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/carl.jpg" alt="Third slide" width= "auto" height="700">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/lion.jpg" alt="Fourth slide" width= "auto" height="700">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/otter.jpg" alt="Fifth slide" width= "auto" height="700">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/sally.jpg" alt="Sixth slide" width= "auto" height="700">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/samantha.jpg" alt="Seventh slide" width= "auto" height="700">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/ted.jpg" alt="Eighth slide" width= "auto" height="700">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/tiger.jpg" alt="Ninth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" width= "auto" height="700">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" width= "auto" height="700">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

        
        <br>
        
        <a href="pets.php" class="btn btn-outline-danger" role="button" aria-pressed="true"> Adopt Now! </a>
        