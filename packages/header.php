<?php 
  include 'connection.php'; 
  include 'User.php';
  $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $path = basename($url, '.php');
  $base_url = "http://localhost/php_native/";
  $user = new User($connect);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php 
      
    ?>
    <link rel="stylesheet" href="<?= ($path === 'php_native') ? 'resources/main.css' : '../resources/main.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>PHP Native</title>
  </head>
  <body>
    <main>
      <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
          <a class="navbar-brand" href="<?= $base_url ?>">PHP Native</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    