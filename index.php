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

 <form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
     <?php echo $_POST['fname']; ?>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
     <?php echo $_GET['lname']; ?>

</form> 
    </body>
    </html>
