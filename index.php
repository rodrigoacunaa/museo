<?php
//Buffering the output
ob_start();

//Getting configuration details 
system('ipconfig /all');

//Storing output in a variable 
$configdata = ob_get_contents();

// Clear the buffer  
ob_clean();

//Extract only the physical address or Mac address from the output
$mac = "Physical";
$pmac = strpos($configdata, $mac);

// Get Physical Address  
$macaddr = substr($configdata, ($pmac + 36), 17);

//Display Mac Address  
echo $macaddr;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Small Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0"
                    src="https://elcomercio.pe/resizer/EPdBN7VtCoVDHpu4J2rlM5Bsg7c=/980x0/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/DIQKACJ4DFDMLDTL5UBODECBQQ.jpg"
                    alt="..." /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">Museo Inclusivo</h1>
                <p>El Museo Inclusivo favorece la cohesión social y combate la exclusión, la discriminación y la
                    desigualdad. Trabaja con y para toda la sociedad, sin excepciones. Muchas personas tienen que
                    superar importantes barreras antes de ser aceptadas como ciudadanos de pleno derecho.</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">


                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include("db.php");
        $sql = "SELECT * FROM `exposiciones` WHERE 1";
        $sqlEX = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($sqlEX);

        foreach ($sqlEX as $row) {
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $url_img = $row['url_img'];
            $id = $row['id'];
            $mapeado = $row['mapeo'];



            echo '
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">

                                <a href="#"><img class="card-img-top img-auto" src="' . $url_img . '" alt="..." /></a>
                                <div class="card-body text-center">

                                    <h5 class="card-title fw-bold">' . $nombre . '</h5>

                                    <p>Descripcion ' . $descripcion . '</p>
                                    <!-- Button trigger modal -->
                                    <button  class="btn btn-primary" id="diaBtn" data-id="' . $id . '" data-toggle="modal" data-target="#exampleModal2">
                                    Ver mapa de la exposicion
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Mapa de la exposicion </h5>
                                            <div class="card-body"><img class="card-img-top img-auto" src="https://museodeantioquia.co/sitio/wp-content/uploads/2013/07/piso2.png" alt="..." /></div>
                                        </div>
                                        <div class="modal-body">
                                        
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
        }
        ?>

        <!-- <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">

                                <a href="#"><img class="card-img-top img-auto" src="'.$url_img.'" alt="..." /></a>
                                <div class="card-body text-center">

                                    <h5 class="card-title fw-bold">'.$nombre.'</h5>

                                    <p>Descripcion de la exposicion '.$cantidad.'</p>
                                    <a class="btn btn-outline-dark mt-auto" id="expoBtn">Agregar</a>
                                </div>
                            </div>
                        </div> -->
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>