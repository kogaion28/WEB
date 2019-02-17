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
                    
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comanda</a>
                        
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php#comanda">Comanda Online</a>
                        <a class="dropdown-item" href="listacomenzi.php">Lista Comenzi</a>
                            
                        </div>
                        
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#orar">Orar</a>
                    </li>
                    
                    <li class="nav-item dropdown active">
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

                <h1 class="main-title">Lista Rezervari</h1>

            </div>
        </div>

    </div>

    <div class="menu" id="meniu">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="container">
                    <div class="section-title">
                        
                    </div>
                    
                      <?php
                    if (isset($_GET['telefon'])) {
                        $telefon = $_GET['telefon'];

                        require("mysql.php");

                        if (isset($_POST['submit'])) {
                            //daca s-a efectuat trimiterea formularului
                            //actualizăm înregistrarea în baza de date
                            $query = "UPDATE newsletter
                            SET	
								email='".$_POST['email']."',
                                telefon='".$_POST['telefon']."'
                                 
                                WHERE telefon=".$telefon;

                            $result=mysqli_query($conexiune, $query);
                            if (!$result) {
                            	echo mysqli_error($conexiune);
                            } else {
                             	echo "<h2 style='text-align:center;'>Modificare efectuată cu success!</h2>";
                                echo "<p style='text-align:center;'>Înapoi la <a href='listanews.php'>lista abonatilor</a>!";
                            }
                        } else {
                            //dacă nu s-a efectuat trimiterea, înseamnă că trebuie să afișăm formularul
                            $query = "SELECT *
                                FROM newsletter
                                WHERE newsletter.telefon=".$telefon;

                            $rezultat = mysqli_query($conexiune, $query) or die ('Eroare');
                            $row=mysqli_fetch_assoc($rezultat);

                            ?>
                            <form style="text-align:center;" id="editClient" action="modnews.php?telefon=<?=$telefon?>" method="post">
                                
								<div class="form-row">
                                    <div class="form-group col-md-3">
                                    </div>
                                     <div class="form-group col-md-3">
                                    <label for="email">Email:</label>
                                    <input class="form-control" type="email" name="email" id="email" value="<?=$row["email"]?>" required>
                                    </div>
                                 <div class="form-group col-md-3">
                                    <label for="telefon">Telefon:</label>
                                    <input class="form-control" type="text" name="telefon" id="telefon" value="<?=$row["telefon"]?>"required >
                                     </div>
                                    <div class="form-group col-md-3">
                                </div>
                                </div>
                             
                              <div id="send">
                                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                              </div>

                            </form>

                            <?php

                        }
                        mysqli_close($conexiune);
                    } else {
                        echo "<p style='text-align:center;'>Lipsă paramentru (nu știu ce abonat să modific)</p>";
                        echo "<p style='text-align:center;'>Mergeți înapoi la <a href='listanews.php'>abonati</a> și selectați unul.</p>";
                    }

                ?>
     

                </div>
            </div>
            <div class="col-md-2"></div>
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