<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Full Color Painting </title> 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta name="theme-color" content="#712cf9">
    <style>
      
      .b-example-divider { /* Style for divider. deleting removes section lines */
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .nav-scroller { /* Allows for scrollable navigate */ 
        position: relative; 
        z-index: 2; 
        height: 2.75rem;
        overflow-y: hidden; /* prevents horizonal scrolling */
      }
      .nav-scroller .nav { /* Styles the scrolling navigation */
        display: flex; 
        flex-wrap: nowrap; /* this stops items from wrapping to new lines */
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.3/examples/carousel/carousel.css" rel="stylesheet">
  </head>
  <body>
  <body style="background-color: #4285DE;">     <!-- setting the background color-->

<header data-bs-theme="dark"> <!-- Navigation bar for simple page access-->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutUsPage.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create-account.php">Create Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login-page.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customer-page.php">Member Page</a>
          </li>
        </ul>
        <form class="d-flex" action="logout.php" method="post">
            <button class="btn btn-outline-success" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<main>
<style>
  #myCarousel .carousel-inner { 
      background-color: #236BCA; 
  }
</style> <!-- 3 deck sliding carousel strech goal to add more functionality -->
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg 
        class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
      </svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Contact Us </h1>
            <p><a class="btn btn-lg btn-primary" href="contact-page.php">Contact</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Services</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Interior</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4"> <!-- hardcoded placeholder image -->
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" 
        src="Images/c3.jpg" 
         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" 
        preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
      </img>      
        <h2 class="fw-normal">Exterior</h2>
        <p>Here's some examples of our exterior/Interior painting works.</p>
          
        <p><a class="btn btn-secondary" href="test.php">View Paintings &raquo;</a></p>
      </div><!-- /.col-lg-4 --> <!-- hardcoded placeholder image -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
        src="Images/c3.jpg"
         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" 
        preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
      </img>
        <h2 class="fw-normal">Testimonials</h2>
        <p>View some of our testimonials here.
          </p>
        <p><a class="btn btn-secondary" href="testimonial-page.php">View Testimonials &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4"> <!-- hardcoded placeholder image -->
      <img class="bd-placeholder-img rounded-circle" width="140" height="140"
        src="Images/c3.jpg"
        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" 
        preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
      </img>        
      <h2 class="fw-normal">About US</h2>
        <p>View our reviews</p>
        <p><a class="btn btn-secondary" href="aboutUsPage.php">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Exterior Painting. <span class="text-body-secondary">Home and Business.</span></h2>
        <p class="lead">Some great placeholder content for Exterior Painting featurette here.</p>
      </div> 
      <div class="col-md-5"> <!-- Hardcodes image field. Cats used as place holder. -->
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
     src="Images/c111.jpg" 
     width="500" 
     height="500" 
     alt="My cat."></img>
      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Interior Painting. <span class="text-body-secondary">Home and Business.</span></h2>
        <p class="lead"> More placeholder Interior Painting content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1"> <!-- Hardcodes image field. Cats used as place holder. -->
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
     src="Images/c3.jpg" 
     width="500" 
     height="500" 
     alt="Another photo of my cat"></img>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Additonal Services. <span class="text-body-secondary">Powerwashing ect.</span></h2>
        <p class="lead">Additonal Services, this is the last block of representative placeholder content.</p>
      </div>
      <div class="col-md-5"> <!-- Hardcodes image field. Cats used as place holder. -->
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
     src="Images/c30.jpg" 
     width="500" 
     height="500" 
     alt="Me holding a salmon infront of a freighter"></img>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

</html>
