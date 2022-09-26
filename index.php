<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>


    <body>
        <h1>Welcome to My Website</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
               <?php
  function getTime() {
  $timezone = date("m/d/y");
echo $timezone;
  }
            
  ?>
        <h2>Today's Date is <?php getTime(); ?></h2>

 <form method="post" action="page2.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
       <input type="submit" value="Submit">
</form> 
 <form method="get" action="page2.php">        
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email">
  <input type="submit" value="Submit">
</form> 
    </body>
    </html>
