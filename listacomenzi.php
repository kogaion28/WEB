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

     <?php
        $lista = true;
        $action = "view";
        if (isset($_GET['telefon'])) {
            $lista = false;
            $telefon = $_GET['telefon'];
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
            }
        }
        require("mysql.php");

        if ($lista) {
            $query = "SELECT * FROM comenzi order by telefon ASC";
        }
        else {
            $query = "SELECT *
                FROM comenzi
                WHERE comenzi.telefon=".$telefon;
        }
        //echo $query;

        $rezultat = mysqli_query($conexiune, $query) or die ('Eroare');

    ?>
    
    
    
    
    <div class="bg-top">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rezervare</a>
                        
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php#rezerva">Rezerva Masa</a>
                        <a class="dropdown-item" href="listarez.php">Lista Rezervari</a>
                            
                        </div>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#meniu">Meniu</a>
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
                    
                    
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comanda</a>
                        
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php#comanda">Comanda Online</a>
                        <a class="dropdown-item" href="listacomenzi.php">Lista Comenzi</a>
                            
                        </div>
                        
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#orar">Orar</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newsletter</a>
                        
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php#news">Aboneaza-te!</a>
                        <a class="dropdown-item" href="listanews.php">Lista Abonati</a>
                            
                        </div>
                        
                    </li>

                </ul>
            </div>
        </nav>

        <div class="padding-container">
            <div class="container">

                <h1 class="main-title">Lista Comenzi</h1>

            </div>
        </div>

    </div>

    <div class="menu" id="meniu">
        
                <div class="container" style=" overflow-x: auto; ">
                
                    
                     <?php
                    if ($action == "view") {
                        if (!$lista) {
                            echo "<p>Ați selectat clientul cu telefonul " . $telefon . ". Detalii:</p>";
                        } else {
                        
                        }
                    ?>
                    
                    <table class="table table-dark table-hover">
                        <tr>
                            <th>Telefon</th>
                            <th>Nume</th>
                            <th>Adresa</th>
                            <th>Meniu</th>
                            <th>Editare</th>
                            <th>Eliminare</th>
                        </tr>
						
                        <?php

                            if (mysqli_num_rows($rezultat) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($rezultat)) {
                                echo "<tr>";
                                echo "<td><a href='listacomenzi.php?telefon=".$row['telefon']."&action=view'>" . $row["telefon"] . "</a></td>";

                                echo "<td>" . $row["nume"] . "</td>";
                                echo "<td>" . $row["adresa"] . "</td>";
                                echo "<td>" . $row["meniu"] . "</td>";
							
								
                                echo "<td><a href='modcomanda.php?telefon=" . $row['telefon'] . " '><img src='img/edit.svg' alt='edit icon' width='32px'></a></td>";
                                echo "<td><a href='listacomenzi.php?telefon=" . $row['telefon'] . " &action=delete'><img src='img/trash.svg' alt='delete icon' width='32px'></a></td>";
                                echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>Nu aveti comenzi active!</td></tr>";
                            }
                         ?>
						 </table>
						 
					

                <?php
                } else {
                    if ($action == "delete") {
                        //delete record
                        $query = "DELETE from comenzi where telefon=".$telefon;
                        $result=mysqli_query($conexiune, $query);

                        if (!$result) {
                            echo mysqli_error($conexiune);
                        } else {
                            echo "<h2 style='text-align:center;'>Comanda a fost stearsa!</h2>";
                            echo "<meta http-equiv=\"refresh\" content=\"2; URL='listacomenzi.php'\" >";

                        }
                    }

                }
                mysqli_close($conexiune);
                ?>
                    
     

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