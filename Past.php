<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Past Races</li>
        </ol>
    </nav>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><?php
echo $_GET["txt"];?></a></li>
            <li class="breadcrumb-item active" aria-current="page">Past Races</li>
        </ol>
    </nav>
    <h1>2022 Race Results</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-4">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Bahrain</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Saudi Arabia</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Australia</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Emilia Romagna</a>
                <a class="list-group-item list-group-item-action" href="#list-item-5">Miami</a>
                <a class="list-group-item list-group-item-action" href="#list-item-6">Spain</a>
                <a class="list-group-item list-group-item-action" href="#list-item-7">Monaco</a>
                <a class="list-group-item list-group-item-action" href="#list-item-8">Azerbaijan</a>
                <a class="list-group-item list-group-item-action" href="#list-item-9">Canada</a>
                <a class="list-group-item list-group-item-action" href="#list-item-10">Great Britain</a>
                <a class="list-group-item list-group-item-action" href="#list-item-11">Austria</a>
                <a class="list-group-item list-group-item-action" href="#list-item-12">France</a>
                <a class="list-group-item list-group-item-action" href="#list-item-13">Hungary</a>
                <a class="list-group-item list-group-item-action" href="#list-item-14">Belgium</a>
            </div>
        </div>
        <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h4 id="list-item-1">March 20th, 2022</h4>
                <p>Winner: Charles Leclerc for Ferrari</p>
                <h4 id="list-item-2">March 27th, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
                <h4 id="list-item-3">April 10th, 2022</h4>
                <p>Winner: Charles Leclerc for Ferrari</p>
                <h4 id="list-item-4">April 24th, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
                <h4 id="list-item-5">May 8th, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
                <h4 id="list-item-6">May 22nd, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
                <h4 id="list-item-7">May 29th, 2022</h4>
                <p>Winner: Sergio Perez for Red Bull Racing</p>
                <h4 id="list-item-8">June 12th, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
                <h4 id="list-item-9">June 19th, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
                <h4 id="list-item-10">July 3rd, 2022</h4>
                <p>Winner: Carlos Sainz for Ferrari</p>
                <h4 id="list-item-11">July 10th, 2022</h4>
                <p>Winner: Charles Leclerc for Ferrari</p>
                <h4 id="list-item-12">July 24th, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
                <h4 id="list-item-13">July 31st, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
                <h4 id="list-item-14">August 28th, 2022</h4>
                <p>Winner: Max Verstappen for Red Bull Racing</p>
            </div>
        </div>
    </div>

</body>
</html>
