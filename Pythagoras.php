<?php
$a = '10';
$b = '20';
$obdelnikObsah = $a * $b;
$strana = '6';
$uhel = '60';
$vyska = ($strana * sqrt(3)) / 2;
$obsah = $vyska *$strana /2;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Pythagoras matematika</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Matematika</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Obsahy <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Objemy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Vysky trojuhelniku</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ostatni</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="mx-auto" style="width: 200px;">

    <h1><u>Obsahy</u></h1>
<p></p>
    <p></p>
    <p></p>
        </div>



<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-6">
            <h2>Obdelnik</h2>
            <table class="table">
                <tbody>
                <tr>
                    <th>Strana a</th>
                    <td><?php echo "$a cm";?></td>
                </tr>
                <tr>
                    <th>Strana b</th>
                    <td><?php echo "$b cm";?></td>
                </tr>
                <tr>
                    <th>Obvod: 2*(a + b)</th>
                    <td><?php echo ($a + $b) * 2;?> cm</td>
                </tr>
                <tr>
                    <th>Obsah: a * b:</th>
                    <td><?php echo ($a * $b);?> cm2</td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h2>Rovnostranny trojuhelnik</h2>
            <table class="table">
                <tbody>
                <tr>
                    <th>Strana</th>
                    <td> <?php echo $strana;?> </td>
                </tr>
                <tr>
                    <th>Uhel α: </th>
                    <td><?php echo $uhel;?></td>
                </tr>
                <tr>
                    <th>Obvod 3 * a: </th>
                    <td><?php echo $strana * 3;?></td>
                </tr>
                <tr>
                    <th>Vyska v:  a * sinα</th>
                    <td><?php echo round($strana * sqrt(3) /2);?></td>
                </tr>
                <tr>
                    <th>Obsah: v * a / 2</th>
                    <td><?php echo round($vyska *$strana /2);?></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
     <div class="col-md-4">
         <h2>Pravouhly trojuhelnik</h2>
         <p>Znalosti o nem sahaji az do 6 stoleti prnl. Pythagoras je nejslavnejsi matematik teto doby a objevil dodnes pouzivanou vetu nesouci jeho jmeno: <h4>Součet obsahů čtverců nad odvěsnami pravoúhlého trojúhelníku je roven obsahu čtverce nad jeho přeponou.</h4> </p>
         <p><h4><u>c2 = a2 + b2</u></p>  </h4>

     </div>
     <div class="col-md-8">
         <img src="img/Ptroj.jpg" class="img-fluid" alt="Responsive image">

      </div>
    </div>
</div>
<footer>
    <div class="container footer-content">
        <div class="row-fluid">
          <p></p>
        </div>
    </div>
<div class="container">
    <div class="col-md-12">
        <div class="jumbotron">
                &copy; Copyright 2017-2019
            <table class="table">
                <tbody>
                <tr>
                    <th> <i class="fab fa-facebook"></i>
                        <a href="https://www.facebook.com/Pythagoras-121951847848481/"><u>Facebook</u></a>
                    </th>
                    <th>  <i class="fab fa-youtube"></i>
                        <a href="https://www.youtube.com/watch?v=Fc6W38etMHg"><u>Youtube</u></a>
                    </th>
                </tr>
        </div>
</div>

</footer>

</body>
