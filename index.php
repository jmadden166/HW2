<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
        <!--The Bootstrap components for this project are 1) color; 2) Carousel; 3) Pictures; 4) Scrollspy; 5) Dropdown; 6) Card; 7) Table; 8) Breadcrumb-->
    </head>
     <?php
$bg_color = htmlspecialchars($_GET['bg']);
$text = htmlspecialchars($_GET['text']);
    $txt = "index.php";
    $name = "Home";
?> 
	

    <body style="background: <?php echo $bg_color ?>">
        <h1>Jack's Formula 1 Fansite</h1>
      
        <h2>
<?php
echo 'Hello, Please Enter Your Name Below.';
?>

<form method=”get” action = “”>
 
<input type="text" name="name">
 
</form>

        </h2>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
	    $get_name=$_GET["name"];
	    $get_name=$_GET["getname"];
		    <h3> 
	echo "Hello, ". $get_name Welcome to My Website"<br>";
	</h3>
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
        </a>
    
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="drivers.php?first=Current Drivers">Current Drivers</a></li>
            <li><a class="dropdown-item" href="Past.php?second=Past">Race Results</a></li>
            <li><a class="dropdown-item" href="races.php?third=Upcoming Races">Upcoming Races</a></li>
            <li><a class="dropdown-item" href="Standings.php?fourth=Current Standings">Current Standings</a></li>
        </ul>
    </div>
    <h2>Some of My Favorite F1 Moments</h2>
    <div class="card-group">
        <div class="card">
            <img src="https://img.redbull.com/images/c_fill,g_auto,w_1130,h_753/q_auto,f_auto/redbullcom/2013/10/28/1331617871971_17/sebastian-vettel-formula-one-indian-grand-prix-fourth-world-championship-celebration" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">2013</h5>
                <p class="card-text">Sebastian Vettel Celebrates His Fourth and Final World Championship.</p>
            </div>
        </div>
        <div class="card">
            <img src="https://i.guim.co.uk/img/media/0aa13a0c3bed3231a9e4e8bca5ae2257340aa692/300_281_4611_2767/master/4611.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=e06435fbab94c75b6cc2e476cd12b4e2" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">1988</h5>
                <p class="card-text">Ayrton Senna's Iconic Pole Lap at Monaco</p>
            </div>
        </div>
        <div class="card">
            <img src="http://1.bp.blogspot.com/_ikEjInomYyw/TUCmlufouxI/AAAAAAAAARQ/pkVhdyl-ano/s1600/lauda11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">1976</h5>
                <p class="card-text">Niki Lauda's Miraculous Return to the Sport</p>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <img src="https://www.racefans.net/wp-content/uploads/2014/10/racefansdotnet-20200427-110842-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">1989</h5>
                <p class="card-text">Senna and Prost's Showdown at Suzuka</p>
            </div>
        </div>
        <div class="card">
            <img src="http://www.f1-grandprix.com/wp-content/uploads/2011/10/button-1680x720.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">2011</h5>
                <p class="card-text">Jensen Button's Comeback at Canada</p>
            </div>
        </div>
        <div class="card">
            <img src="https://cdn-ddcfa.nitrocdn.com/JQYfXJOBUFneKLnOzezIRFhjbgnfyVnx/assets/static/optimized/rev-b313104/wp-content/uploads/sites/2/2021/12/18173932/Max-Verstappen-overtakes-Lewis-Hamilton-in-the-2021-Abu-Dhabi-Grand-Prix-1-1600x900.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">2021</h5>
                <p class="card-text">Hamilton and Verstappen Final Lap Showdown in Abu Dhabi</p>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <img src="http://news.bbcimg.co.uk/media/images/52015000/jpg/_52015801_brazil2008_640.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">2008</h5>
                <p class="card-text">Is that Glock?</p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.formula1.com/content/dam/fom-website/sutton/2020/Italy/Sunday/1270965772.jpg.transform/9col/image.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">2020</h5>
                <p class="card-text">Gasly's Win at Monza</p>
            </div>
        </div>
        <div class="card">
            <img src="https://d3cm515ijfiu6w.cloudfront.net/wp-content/uploads/2020/12/08071619/Sergio-Perez-Sakhir-GP-win.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">2020</h5>
                <p class="card-text">Checho's Win at Bahrain</p>
            </div>
        </div>
    </div>
</html>
