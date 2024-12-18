
<!DOCTYPE html> <!-- simple form with header pulled from index. -->
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
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.3/examples/carousel/carousel.css" rel="stylesheet">
<head>
<style>
    body {
      padding-top: 70px;
    }
  </style>
<header data-bs-theme="dark">
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
            <a class="nav-link" href="contact-page.php">Contact us</a>
          </li>
        </ul>
        <a class="btn btn-outline-success" href="logout.php">Logout</a>
      </div>
    </div>
  </nav>
</header>
        <body>
        <body style="background-color: #4285DE;"> <!-- form for collecting username and password before submitting user data to login.php -->
        <form class="row g-3" novalidate method="post" action="login.php">
            <div    class="container">
            <div class="col-md-4">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" id="Username" name="Username" required>
                <div class="invalid-feedback">Please choose a username.</div> <!-- has some data valadation to ensure user enty. -->
            </div>

            <div class="col-md-4">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="Password" required>
                <div class="invalid-feedback">Please enter a password.</div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="Login">Login</button>
            </div>
            </form>


            </div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
        </body>
                
                
            </html>