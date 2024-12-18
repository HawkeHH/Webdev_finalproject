<?php // inital check to ensure user is logged in to view page. 
declare(strict_types=1);
session_start(); // begin a user session 
require './includes/database-connection.php'; // database connection 
require './includes/db-functions.php';
if (!isset($_SESSION['loggin_in']) || $_SESSION['loggin_in'] !== true) { // When a user logs in, the login.php creates a loggin_in = true varible stored in the session. 
    header("Location: login-page.php");                          // this checks to ensure the user has logged in by checking that varible. 
    exit();                                   // if not logged in redirects to login.
}

try {
    $query = "SELECT * FROM customers WHERE c_id = ?"; // 
    $stmt = $pdo->prepare($query);
    $stmt->execute([$_SESSION['c_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        session_destroy();
        header("Location: login-page.php");
        exit();
    }
} catch (PDOException $e) {
    die("Error fetching user details: " . $e->getMessage());
}
  $permission = $_SESSION['permission'] ?? null;


?>
<!DOCTYPE html>
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
    <link href="https://getbootstrap.com/docs/5.3/examples/carousel/carousel.css" rel="stylesheet">
<head>
  <!-- adds a extra bit of spacing at the top of the page to help with appearance. -->
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
          </li> <!-- This checks the user permission level. If permission level is set to 2, It displays Admin buttons, or buttons for editing the website -->
          <?php if ($permission == 2): // permission level can only be altered inside the database ?>
            <li class="nav-item">
              <a href="update-aboutus-page.php" class="btn btn-outline-warning ms-2 mt-1">Update About Us</a> <!-- Links to the update about us page -->
            </li>
            <li class="nav-item">
              <a href="update-contactus-page.php" class="btn btn-outline-warning ms-2 mt-1">Update Contact Us</a> <!-- Links to the contact us page -->
            </li>
          <?php endif; ?>
        </ul>
        <a class="btn btn-outline-success" href="logout.php">Logout</a>
      </div>
    </div>
  </nav>
</header>
<body>
<body style="background-color: #4285DE;"> 
  <form class="row g-3" novalidate method="post" action="update-aboutus.php"> <!-- Forum for updating user information. Calls update-aboutus.php -->
      <div class="container rounded bg-white mt-5 mb-5">
      <div class="row">
        <div class="col-md-3 border-right"></div>
        <div class="col-md-5 border-right">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-right">Profile Settings</h4>
            </div>
            <div class="row mt-2">
              <div class="col-md-6">
                <label class="labels">First Name</label> <!--Form collects user data and assigns to a php varible which is used in update-aboutus.php -->
                <input type="text" class="form-control" name="fname" value="<?= htmlspecialchars($currentCustomer['fname'] ?? '') ?>">
              </div>
              <div class="col-md-6">
                <label class="labels">Last Name</label>
                <input type="text" class="form-control" name="lname" value="<?= htmlspecialchars($currentCustomer['lname'] ?? '') ?>">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-12">
                <label class="labels">Address</label>
                <input type="text" class="form-control" name="address_one" value="<?= htmlspecialchars($currentCustomer['address_one'] ?? '') ?>">
              </div>
              <div class="col-md-12">
                <label class="labels">Mobile Number</label>
                <input type="text" class="form-control" name="phonenum" value="<?= htmlspecialchars($currentCustomer['phonenum'] ?? '') ?>">
              </div>
              <div class="col-md-12">
                <label class="labels">City</label>
                <input type="text" class="form-control" name="city" value="<?= htmlspecialchars($currentCustomer['city'] ?? '') ?>">
              </div>
              <div class="col-md-12">
                <label class="labels">Zip</label>
                <input type="text" class="form-control" name="zip" value="<?= htmlspecialchars($currentCustomer['zip'] ?? '') ?>">
              </div>
              <div class="col-md-12">
                <label class="labels">State</label>
                <input type="text" class="form-control" name="state" value="<?= htmlspecialchars($currentCustomer['state'] ?? '') ?>">
              </div>
              <div class="col-md-12">
                <label class="labels">Email</label>
                <input type="text" class="form-control" name="email" value="<?= htmlspecialchars($currentCustomer['email'] ?? '') ?>">
              </div>
            </div>
            <button class="btn btn-primary profile-button mt-3" type="submit">Update Profile</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 py-5">  <!-- Strech goal to implement user reviews which can be used as testimonals -->
            <div class="d-flex justify-content-between align-items-center experience">
              <span>Leave Review</span>
              <button class="btn btn-primary profile-button" type="button">Review</button>
            </div>
            </div>
      </form>
      <div class="col-md-15">
            <div class="p-5 py-7"> 
            <div class="d-flex justify-content-between align-items-center experience">
          <form method="post" action="delete-account.php"> <!-- Button to delete a users account made red. -->
        <button class="btn btn-danger profile-button mt-3" type="submit">Delete Account</button>
    </div>
  </div>
</div>
    </div>
  </form>
</body>