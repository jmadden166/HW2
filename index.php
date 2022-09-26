<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <head>
        <style>
            h1 {
                text-align: center;
            }

            h2 {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h1>Welcome to My Website</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
               <?php
  function getTime() {
  $timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone;
  }
              ?>
        <h2>It is currently getTime()</h2>

    </body>
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
        </a>

        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="page2.php">My Interests</a></li>
            <li><a class="dropdown-item" href="page3.php">My Classes</a></li>
        </ul>
    </div>

    </html>
