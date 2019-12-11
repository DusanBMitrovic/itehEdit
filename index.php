<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    
    <title>Home</title>
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

    <!-- CONTENT -->
    <div class="container mt-5">
        <div class="col-md-4 offset-md-4">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                Rezervisi
            </button>
        </div>
    </div>



    <!-- RESERVATION MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rezervisi sto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- FORM IN MODAL -->
                    <form id="newReservationForm" action="" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ime i prezime</label>
                            <input type="text" class="form-control" name="ime" id="exampleFormControlInput1"
                                placeholder="Marko Markovic">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Datum</label>
                            <input type="text" class="form-control" name="datum" id="datepicker"
                                placeholder="Kliknite da izaberete datum">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Broj osoba</label>
                            <select class="form-control" name="broj_osoba" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Napomena</label>
                            <textarea class="form-control" name="napomena" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>

                </div>
                <div class="modal-footer" id="formBtns">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Izadji</button>
                    <input class="btn btn-primary" type="submit" name="submit" value="Rezervisi" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/newReservation.js"></script>
    <script src="./js/logout.js"></script>
</body>

</html>