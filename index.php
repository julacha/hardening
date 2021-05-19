<?php
require_once 'login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css.css">
    <title>first_page</title>
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar fixed-top navbar navbar-dark bg-dark navbar-expand-sm">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="log">
                        <button type="submit" class="btn btn-primary signbtn" id="toggle-register">Sign in</button>
                        <button type="submit" class="btn btn-primary logbtn" id="toggle-login">&nbsp;Login&nbsp;</button>
                    </div>
                    <!-- <span class="navbar-text">
                        Navbar text
                    </span> -->
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/ma-1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Imunitātes stiprināšana</h5>
                                <p>Rūdīšana uzlabo imūno aizsardzību, stiprina ķermeni un garu</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/img1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Izturība pret stresu</h5>
                                <p>Rūdīšana paaugstina centrālās nervu sistēmas tonusu un uzlabo garastāvokli</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/img2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Veselība un enerģija</h5>
                                <p>Rūdīšana uzlabo asinsriti un normalizē vielmaiņu</p>
                            </div>
                        </div>
                        <div id="loginForm" class="log-box" style="background-color:white;">
                            <?php
                            include "logform.php";
                            ?>
                        </div>
                        <div id="registerForm" class="auth-box" style="background-color:white;">
                            <?php
                            include "regform.php";
                            ?>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Rudīšanas dienasgrāmata <span class="text-muted">Individuālais palīgs</span></h2>
            <p class="lead">Iespējams, katrs no mums vismaz vienu reizi savā dzīvē mēģināja rūdīt, bet lielākā daļa padevās pēc pirmajiem mēģinājumiem. Bet atlikusī daļa - tie, kas padarīja rūdīšanu par parastu procedūru - var lepoties ar spēcīgu imunitāti, garīgo un fizisko veselību. Šī online dienasgrāmata palīdzēs tev sistematiski un pakapeniski apgūt jauno izaicinājumu! Pievinojies uzradot savu lidzšīnojo līmeni un sac jauno dzīvi!</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/Rectangle.png">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row">
        <div class="col-sm round"><svg class="bd-placeholder-img rounded-circle" width="70" height="70" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 70x70" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#FFFFFF"></rect><text x="36%" y="50%" fill="#000" dy=".3em">1</text>
            </svg>
            <h4>Sagatavošanās posms</h4>
            <a class="btn btn-secondary" href="#">Apraksts »</a>
        </div>
        <div class="col-sm round"><svg class="bd-placeholder-img rounded-circle" width="70" height="70" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 70x70" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#FFFFFF"></rect><text x="36%" y="50%" fill="#777" dy=".3em">2</text>
            </svg>
            <h4>Kontrasta procedūras</h4>
            <a class="btn btn-secondary" href="#">Apraksts »</a>
        </div>
        <div class="col-sm round"><svg class="bd-placeholder-img rounded-circle" width="70" height="70" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 70x70" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#FFFFFF"></rect><text x="36%" y="50%" fill="#777" dy=".3em">3</text>
            </svg>
            <h4>Duša</h4>
            <a class="btn btn-secondary" href="#">Apraksts »</a>
        </div>
        <div class="col-sm round"><svg class="bd-placeholder-img rounded-circle" width="70" height="70" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 70x70" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#FFFFFF"></rect><text x="36%" y="50%" fill="#777" dy=".3em">4</text>
            </svg>
            <h4>Ziemas peldēšana</h4>
            <a class="btn btn-secondary" href="#">Apraksts »</a>
        </div>
    </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <div class="mb-3" id="bgcenter">
                <!-- Button trigger modal -->
                <button id="message" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Uzdot jautājumu
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="new-block">
                                    <!-- <div class="logo">
                                        <img src="#" alt="logo">
                                    </div> -->
                                    <div id="date"></div>
                                </div>
                                <form action="" class="new-question">
                                    <textarea name="question"></textarea>
                                    <button type="submit">Отправить</button>
                                </form>
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
        <div class="col-sm-8" style="background-color:orange;">
            <article class="blog-post">
                <p class="blog-post-meta">
                <div class="datelist">
                    <div></div>
                </div>
                </p>
                <div class="question-list">
                    <div class="template">
                        <pre>
                        </pre>
                    </div>
                </div>
                <hr>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <script src="script.js"></script>
</body>

</html>