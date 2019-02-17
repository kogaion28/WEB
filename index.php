<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hanul Haiducilor - Mici Pe Bat</title>
    <meta name="description" content="Restaurantul Hanul Haiducilor va invita la un mic pe bat.">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="scss/custom.scss" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,600,700,800|Roboto:100,200,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="img/ico.ico" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="bg-top">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rezervare</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#rezerva">Rezerva Masa</a>
                            <a class="dropdown-item" href="listarez.php">Lista Rezervari</a>

                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#meniu">Meniu</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto my-2 order-0 order-md-1 position-relative">
                <a class="mx-auto" href="index.php">
                    <img src="img/logo.png" class="rounded-circle">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
                <ul class="navbar-nav mr-auto text-center">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comanda</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#comanda">Comanda Online</a>
                            <a class="dropdown-item" href="listacomenzi.php">Lista Comenzi</a>

                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#orar">Orar</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newsletter</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#news">Aboneaza-te!</a>
                            <a class="dropdown-item" href="listanews.php">Lista Abonati</a>

                        </div>

                    </li>

                </ul>
            </div>
        </nav>

        <div class="padding-container">
            <div class="container">

                <h1 class="main-title">Hanul Haiducilor</h1>
                <h2 class="main-subtitle">Mici pe bat</h2>

            </div>
        </div>

    </div>

    <div class="first-content">
        <div class="container">

            <div class="section-title">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="resp-h">
                            <h2 style="text-align: center;" id="welcome">Bine ati venit!</h2>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor turpis in dui dignissim, id convallis massa suscipit. Nullam bibendum augue et volutpat varius. Nulla interdum mi massa, quis dapibus mi sollicitudin a. Maecenas nulla nisl, tempor a turpis eu, malesuada ultricies libero. Sed id purus urna. Suspendisse vel semper sapien. Quisque a lacus vulputate, cursus lacus a, porttitor sapien. Nunc tellus est, ultrices vitae urna eget, scelerisque volutpat turpis. Integer et maximus elit, vitae eleifend erat. Phasellus fringilla nisi id lectus tincidunt, sed lacinia sem rutrum. Nullam sed semper justo.</p>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor turpis in dui dignissim, id convallis massa suscipit. Nullam bibendum augue et volutpat varius. Nulla interdum mi massa, quis dapibus mi sollicitudin a. Maecenas nulla nisl, tempor a turpis eu, malesuada ultricies libero. Sed id purus urna. Suspendisse vel semper sapien. Quisque a lacus vulputate, cursus lacus a, porttitor sapien. Nunc tellus est, ultrices vitae urna eget, scelerisque volutpat turpis. Integer et maximus elit, vitae eleifend erat. Phasellus fringilla nisi id lectus tincidunt, sed lacinia sem rutrum. Nullam sed semper justo.</p>
                </div>
            </div>
        </div>
    </div>

    <?php

                        require("mysql.php");

                        if (isset($_POST['send'])) {
                            //daca s-a efectuat trimiterea formularului
                            //înregistrăm clientul nou în baza de date
                            $nume = $_POST['nume'];
                            $telefon = $_POST['telefon'];
                            $data = $_POST['data'];
                            $ora = $_POST['ora'];
                            $email = $_POST['email'];
                            $pers = $_POST['pers'];

                            $query = "INSERT INTO rezervari
                            (nume,telefon,data,ora,email,pers)
                                VALUES ('$nume', '$telefon', '$data', '$ora','$email','$pers');";

                            $result=mysqli_query($conexiune, $query);

                            if (!$result) {
                            	echo mysqli_error($conexiune);
                            } else {
                             	echo "<h2 style='text-shadow: 0px 2px 0px #b7b7b7;text-align:center;font-size: 1.7em';>Rezervare efectuată cu succes!</h2>";
                                echo "<p style='text-align:center';>Înapoi la <a href='index.php'>restaurant!</a>";

                            }

                        } else {
                            //dacă nu s-a efectuat trimiterea, înseamnă că trebuie să afișăm formularul

                            ?>

        <div class="form-content" id="rezerva">
            <div class="bg-content">
                <div class="container">
                    <div class="section-title">
                        <div class="resp-h">
                            <h2 style="text-align: center">Rezervare</h2>
                        </div>
                    </div>

                    <form action="index.php#welcome" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nume">Nume</label>
                                <input type="text" class="form-control" id="nume" placeholder="Nume" name="nume" required>
                            </div>
                            <div class="form-group col-md-3">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefon">Numar Telefon</label>
                                <input type="text" class="form-control" id="telefon" placeholder="025..." name="telefon" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="pers">Numar Persoane</label>
                                <select id="pers" name="pers" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="data">Data</label>
                                <input type="text" class="form-control" id="data" required placeholder="Ziua/Luna/An" name="data" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ora">Ora</label>
                                <input type="text" class="form-control" id="ora" required placeholder="20:30" name="ora" required>
                            </div>
                            <div class="form-group col-md-3">
                            </div>
                        </div>
                        <div id="send">
                            <button type="submit" class="btn btn-primary" name="send" value="send" style=" margin-top: 20px;">Rezerva</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <?php
            }
            mysqli_close($conexiune);?>

            <div class="menu" id="meniu">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="container">
                            <div class="section-title">
                                <div class="resp-h">
                                    <h2 style="text-align: center;">Meniu</h2>
                                </div>
                            </div>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="justify-content: center;">
                                <li class="nav-item">
                                    <a class="nav-link active" id="bauturi" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Bauturi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="paste" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Paste</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="salate" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Salate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ciorbe" data-toggle="pill" href="#ciorbe-pill" role="tab" aria-controls="ciorbe-tab" aria-selected="false">Ciorbe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aperitiv" data-toggle="pill" href="#aperitiv-pill" role="tab" aria-controls="aperitiv-tab" aria-selected="false">Aperitive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="gratar" data-toggle="pill" href="#gratar-pill" role="tab" aria-controls="gratar-tab" aria-selected="false">Gratar</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="bauturi">
                                    <div class="container">
                                        <table class="table table-dark table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Bautura #1</td>
                                                    <td style=" text-align: right; ">5 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Bautura #2</td>
                                                    <td style=" text-align: right; ">10 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Bautura #3</td>
                                                    <td style=" text-align: right; ">15 LEI</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="paste">
                                    <div class="container">
                                        <table class="table table-dark table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Paste #1</td>
                                                    <td style=" text-align: right; ">5 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Paste #2</td>
                                                    <td style=" text-align: right; ">10 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Paste #3</td>
                                                    <td style=" text-align: right; ">15 LEI</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="salate">
                                    <div class="container">
                                        <table class="table table-dark table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Salata #1</td>
                                                    <td style=" text-align: right; ">5 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Salata #2</td>
                                                    <td style=" text-align: right; ">10 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Salata #3</td>
                                                    <td style=" text-align: right; ">15 LEI</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ciorbe-pill" role="tabpanel" aria-labelledby="ciorbe">
                                    <div class="container">
                                        <table class="table table-dark table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Ciorba #1</td>
                                                    <td style=" text-align: right; ">5 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Ciorba #2</td>
                                                    <td style=" text-align: right; ">10 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Ciorba #3</td>
                                                    <td style=" text-align: right; ">15 LEI</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="aperitiv-pill" role="tabpanel" aria-labelledby="aperitiv">
                                    <div class="container">
                                        <table class="table table-dark table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Aperitiv #1</td>
                                                    <td style=" text-align: right; ">5 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Aperitiv #2</td>
                                                    <td style=" text-align: right; ">10 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Aperitiv #3</td>
                                                    <td style=" text-align: right; ">15 LEI</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gratar-pill" role="tabpanel" aria-labelledby="gratar">
                                    <div class="container">
                                        <table class="table table-dark table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Gratar #1</td>
                                                    <td style=" text-align: right; ">5 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Gratar #2</td>
                                                    <td style=" text-align: right; ">10 LEI</td>
                                                </tr>
                                                <tr>
                                                    <td>Gratar #3</td>
                                                    <td style=" text-align: right; ">15 LEI</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>

            <?php

                        require("mysql.php");

                        if (isset($_POST['submit'])) {
                            //daca s-a efectuat trimiterea formularului
                            //înregistrăm clientul nou în baza de date
                            $nume = $_POST['nume'];
                            $telefon = $_POST['telefon'];
                            $adresa = $_POST['adresa'];
                            $meniu = $_POST['meniu'];

                            $query = "INSERT INTO comenzi (nume,telefon,adresa,meniu)
                                VALUES ('$nume', '$telefon', '$adresa', '$meniu');";

                            $result=mysqli_query($conexiune, $query);

                            if (!$result) {
                            	echo mysqli_error($conexiune);
                            } else {
                             	echo "<h2 style='text-shadow: 0px 2px 0px #b7b7b7;text-align:center;font-size: 1.7em';>Comandă efectuată cu succes!</h2>";
                                echo "<p style='text-align:center';>Înapoi la <a href='index.php'>restaurant!</a>";

                            }

                        } else {
                            //dacă nu s-a efectuat trimiterea, înseamnă că trebuie să afișăm formularul

                            ?>

                <div class="order-content" id="comanda">
                    <div class="container">
                        <div class="section-title">
                            <div class="resp-h">
                                <h2 style="text-align: center">Comanda Online</h2>
                            </div>
                        </div>

                        <form id="editClient" action="index.php#meniu" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nume">Nume</label>
                                    <input type="text" name="nume" class="form-control" id="cnp" placeholder="Nume" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="adresa">Adresa</label>
                                    <input type="text" name="adresa" class="form-control" id="adresa" placeholder="Adresa de livrare" required>
                                </div>
                                <div class="form-group col-md-3">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="meniu">ID Meniu</label>
                                    <input type="text" name="meniu" class="form-control" id="meniu" placeholder="25,36,55 etc" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="telefone">Telefon</label>
                                    <input type="text" name="telefon" class="form-control" id="telefon" required>
                                </div>
                                <div class="form-group col-md-3">
                                </div>
                            </div>
                            <div id="send">
                                <button type="submit" class="btn btn-primary" name="submit" value="Submit" style=" margin-top: 20px;">Trimite Comanda</button>
                            </div>
                        </form>

                    </div>

                </div>

                <?php
            }
            mysqli_close($conexiune);?>

                    <div class="container text-center" style=" padding: 40px; " id="despre">

                        <div class="section-title">
                            <div class="resp-h">
                                <h2 id="despre">Despre Noi</h2>
                            </div>
                        </div>
                        <p style="text-align: left;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor turpis in dui dignissim, id convallis massa suscipit. Nullam bibendum augue et volutpat varius. Nulla interdum mi massa, quis dapibus mi sollicitudin a. Maecenas nulla nisl, tempor a turpis eu, malesuada ultricies libero. Sed id purus urna. Suspendisse vel semper sapien. Quisque a lacus vulputate, cursus lacus a, porttitor sapien. Nunc tellus est, ultrices vitae urna eget, scelerisque volutpat turpis. Integer et maximus elit, vitae eleifend erat. Phasellus fringilla nisi id lectus tincidunt, sed lacinia sem rutrum. Nullam sed semper justo.
                        </p>
                        <p style="text-align: left;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor turpis in dui dignissim, id convallis massa suscipit. Nullam bibendum augue et volutpat varius. Nulla interdum mi massa, quis dapibus mi sollicitudin a. Maecenas nulla nisl, tempor a turpis eu, malesuada ultricies libero. Sed id purus urna. Suspendisse vel semper sapien. Quisque a lacus vulputate, cursus lacus a, porttitor sapien. Nunc tellus est, ultrices vitae urna eget, scelerisque volutpat turpis. Integer et maximus elit, vitae eleifend erat. Phasellus fringilla nisi id lectus tincidunt, sed lacinia sem rutrum. Nullam sed semper justo.
                        </p>
                        <p style="text-align: left;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor turpis in dui dignissim, id convallis massa suscipit. Nullam bibendum augue et volutpat varius. Nulla interdum mi massa, quis dapibus mi sollicitudin a. Maecenas nulla nisl, tempor a turpis eu, malesuada ultricies libero. Sed id purus urna. Suspendisse vel semper sapien. Quisque a lacus vulputate, cursus lacus a, porttitor sapien. Nunc tellus est, ultrices vitae urna eget, scelerisque volutpat turpis. Integer et maximus elit, vitae eleifend erat. Phasellus fringilla nisi id lectus tincidunt, sed lacinia sem rutrum. Nullam sed semper justo.
                        </p>
                        <p style="text-align: left;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor turpis in dui dignissim, id convallis massa suscipit. Nullam bibendum augue et volutpat varius. Nulla interdum mi massa, quis dapibus mi sollicitudin a. Maecenas nulla nisl, tempor a turpis eu, malesuada ultricies libero. Sed id purus urna. Suspendisse vel semper sapien. Quisque a lacus vulputate, cursus lacus a, porttitor sapien. Nunc tellus est, ultrices vitae urna eget, scelerisque volutpat turpis. Integer et maximus elit, vitae eleifend erat. Phasellus fringilla nisi id lectus tincidunt, sed lacinia sem rutrum. Nullam sed semper justo.
                        </p>
                        <p style="text-align: left;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor turpis in dui dignissim, id convallis massa suscipit. Nullam bibendum augue et volutpat varius. Nulla interdum mi massa, quis dapibus mi sollicitudin a. Maecenas nulla nisl, tempor a turpis eu, malesuada ultricies libero. Sed id purus urna. Suspendisse vel semper sapien. Quisque a lacus vulputate, cursus lacus a, porttitor sapien. Nunc tellus est, ultrices vitae urna eget, scelerisque volutpat turpis. Integer et maximus elit, vitae eleifend erat. Phasellus fringilla nisi id lectus tincidunt, sed lacinia sem rutrum. Nullam sed semper justo.
                        </p>
                    </div>

                    <div class="footer-final">

                        <div class="container">
                            <div class="row" style=" padding-top: 30px; padding-bottom: 45px;">
                                <div class="col-md-4" id="orar">
                                    <div class="footer-pad">
                                        <h3>Orar</h3>
                                        <p>Luni : Inchis</p>
                                        <p>Marti - Vineri : 9:00 - 23:00</p>
                                        <p>Sambata : 10:00 - 20:00</p>
                                        <p>Duminica : 10:00 - 18:00</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="footer-pad">
                                        <h3>Locatie</h3>
                                        <p>Alba Iulia, Bd Ferdinand, Nr 30</p>
                                        <p>Numar Telefon: 0258 853 955</p>
                                        <p>Email: mail@hanulhaiducilor.ro</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="footer-pad">
                                        <h3 id="news">Newsletter</h3>

                                        <?php

                        require("mysql.php");

                        if (isset($_POST['letter'])) {
                            //daca s-a efectuat trimiterea formularului
                            //înregistrăm clientul nou în baza de date
                            $email = $_POST['email'];
                            $telefon = $_POST['telefon'];

                            $query = "INSERT INTO newsletter
                            (email,telefon)
                                VALUES ('$email', '$telefon');";

                            $result=mysqli_query($conexiune, $query);

                            if (!$result) {
                            	echo mysqli_error($conexiune);
                            } else {
                             	echo "<h3 style='text-shadow: 0px 2px 0px #b7b7b7;text-align:center;font-size: 1.7em';>Ati fost abonat!</h3>";
                                echo "<p style='text-align:center';>Înapoi la <a href='index.php'>restaurant!</a>";

                            }

                        } else {
                            //dacă nu s-a efectuat trimiterea, înseamnă că trebuie să afișăm formularul

                            ?>

                                            <form action="index.php#orar" method="post">
                                                <label for="email"></label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

                                                <label for="telefon"></label>
                                                <input type="text" name="telefon" class="form-control" id="telefon" placeholder="025..." required>

                                                <div id="send">
                                                    <button style=" padding: 15px; margin-top: 20px;" type="submit" name="letter" value="letter" class="btn btn-primary">Aboneaza-ma!</button>
                                                </div>
                                            </form>
                                    </div>

                                    <?php
            }
            mysqli_close($conexiune);?>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="footer-content">

                        <div class="container">

                            <p>© 2018 - Hanul Haiducilor</p>

                        </div>

                    </div>

                    <!-- Scripts -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>

</body>

</html>