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
            <a class="nav-link" href="customer-page.php">Member Page</a>
          </li>
        </ul>
        <a class="btn btn-outline-success" href="logout.php">Logout</a>
      </div>
    </div>
  </nav>
</header>
  <body style="background-color: #4285DE;">   <!-- Form for updating about us -->
    <form class="row g-3" novalidate method="post" action="update-aboutus.php" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" required for photo upload -->
      <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
          <div class="col-md-3 border-right"></div>
          <div class="col-md-5 border-right">
            <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">About Us Settings</h4>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <label class="labels">Description 1 Title</label>
                  <input type="text" class="form-control" name="description1Title" value="<?= htmlspecialchars($currentAboutUs['description1Title'] ?? '') ?>">
                </div>
                <div class="col-md-12">
                  <label class="labels">Description 1</label>
                  <input type="text" class="form-control" name="description1" value="<?= htmlspecialchars($currentAboutUs['description1'] ?? '') ?>">
                </div>
                <div class="col-md-12">
                  <label class="labels">Description 2 Title</label>
                  <input type="text" class="form-control" name="description2Title" value="<?= htmlspecialchars($currentAboutUs['description2Title'] ?? '') ?>">
                </div>
                <div class="col-md-12">
                  <label class="labels">Description 2</label>
                  <input type="text" class="form-control" name="description2" value="<?= htmlspecialchars($currentAboutUs['description2'] ?? '') ?>">
                </div>
                <div class="col-md-12">
                  <label class="labels">Photo 1</label>
                  <input type="file" class="form-control" name="about_photo_id1"> <!-- fields for selecting image. assigns to about_photo_id1  -->
                </div>
                <div class="col-md-12">
                  <label class="labels">Photo 2</label>
                  <input type="file" class="form-control" name="about_photo_id2">
                </div>
              </div>
              <button class="btn btn-primary profile-button mt-3" type="submit">Update Profile</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</body>
</html>