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

<?php
require './includes/database-connection.php'; // creates a connection to the database 
require './includes/db-functions.php'; // creates a connection to the database functions provided by the book.

// Fetch About Us content from the database
    try { // simple select quary to pull everything but ID. Set where clause = 1. No point in adding more records when you can just update one when needed. 
        $query = "SELECT phonenum, email, hours 
            FROM contact_us WHERE contact_id = 1";
    
        $stmt = $pdo->query($query);
        $ContactUs = $stmt->fetch();
    } catch (PDOException $e) { // Catch for errors from book
        error_log("About Us Fetch Error: " . $e->getMessage());
        $ContactUs = null;
        }
      
    ?> <!-- Page desgin pulled and edited from portion of Index -->
    <body>
    <div class="Contact Us">
    <div class="container title">
    <h2 class="featurette-heading fw-normal lh-1">Contact Us</h2>
    <div class="row featurette">
    <div class="col-md-7">
        <h4 class="featurette-heading fw-normal lh-1"> <!-- Assigning the database phone number value to the display Includes placeholder text if data is null -->
            <?php echo html_escape($ContactUs['phonenum'] ?? 'Error'); ?>
        </h4>
        <p class="lead"> <!-- Assigning the database Email value to the display Includes placeholder text if data is null -->
            <?php echo html_escape($ContactUs['email'] ?? 'Error'); ?>
        </p>
        <p class="lead"> <!-- Assigning the database Hours value to the display Includes placeholder text if data is null -->
            <?php echo html_escape($ContactUs['hours'] ?? 'Error'); ?>
        </p>
    </div>
    <div class="col-md-5"> <!-- hard coded image field to fill some space in the page -->
            <img src="Images/c3.jpg"
            
                 class="featurette-image img-fluid mx-auto" 
                 alt="Me holding a lake trout" 
                 width="500" 
                 height="500">
    </div>    
    </body>
</html>

    