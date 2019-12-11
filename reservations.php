<?php
include "./php/dbconfig.php";


if(!isset($_SESSION['uname'])){
    echo 'NEMA NISTA';
    header('Location: login.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/kt-2.5.1/r-2.2.3/sc-2.0.1/sl-1.3.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/kt-2.5.1/r-2.2.3/sc-2.0.1/sl-1.3.1/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Editor-1.9.2/css/editor.dataTables.css">
    <script type="text/javascript" src="Editor-1.9.2/js/dataTables.editor.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Rezervacije</title>
</head>
<body>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ">Restoran</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./reservations.php">Rezervacije</a>
                </li>

            </ul>
            <div id="logoutDiv">
            <?php
                    include "./php/dbconfig.php";


                    if(isset($_SESSION['uname'])){
                       echo  '<button class="btn btn-outline-danger" name="logout" id="logout" onclick="logout()">Logout</button>';
                    }
                ?>
            </div>
        </div>
    </nav>

<!-- RESERVATIONS TABLE -->

<div class="container mt-5">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Datum</th>
                <th>Broj Ljudi</th>
                <th>Napomena</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Datum</th>
                <th>Broj Ljudi</th>
                <th>Napomena</th>
            </tr>
        </tfoot>
    </table>
</div>

<script src="./js/logout.js"></script>
<script src="./js/reservations.js"></script>
</body>
</html>
