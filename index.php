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
                    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
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
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/img1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/img2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
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
    <div class="row">
        <div class="col-sm round"><svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#FFFFFF"></rect><text x="36%" y="50%" fill="#000" dy=".3em">1</text>
            </svg>
            <h4>Подготови-<br>тельный этап</h4>
            <p>Apraksts</p>
            <a class="btn btn-secondary" href="#">Описание »</a>
        </div>
        <div class="col-sm round"><svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#FFFFFF"></rect><text x="36%" y="50%" fill="#777" dy=".3em">2</text>
            </svg>
            <h4>Контрастные<br>процедуры</h4>
            <p>Apraksts</p>
            <a class="btn btn-secondary" href="#">Описание »</a>
        </div>
        <div class="col-sm round"><svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#FFFFFF"></rect><text x="36%" y="50%" fill="#777" dy=".3em">3</text>
            </svg>
            <h4>Обливания</h4>
            <p>Apraksts</p>
            <a class="btn btn-secondary" href="#">Описание »</a>
        </div>
        <div class="col-sm round"><svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#FFFFFF"></rect><text x="36%" y="50%" fill="#777" dy=".3em">4</text>
            </svg>
            <h4>«Моржевание»</h4>
            <p>Apraksts</p>
            <a class="btn btn-secondary" href="#">Описание »</a>
        </div>
    </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <div class="mb-3" id="bgcenter">
                <!-- Button trigger modal -->
                <button id="message" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Запустить модальное окно
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
                                    <div class="logo">
                                        <!-- <img src="#" alt="logo"> -->
                                    </div>
                                    <input type="date" class="form-control" id="date" name="date" placeholder="Дата" required>
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
                <h2 class="blog-post-title">Title</h2>
                <p class="blog-post-meta"> Mark, date</p>
                <div class="question-list">
                    <div class="template">
                        <pre></pre>
                        <!-- <a href="#" class="option"><svg viewBox="0 0 3 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.5" r="1.5" fill="black" />
                                <circle cx="1.5" cy="6.5" r="1.5" fill="black" />
                                <circle cx="1.5" cy="11.5" r="1.5" fill="black" />
                            </svg> -->
                        </a>
                        <a href="#" class="save">Save</a>
                        <div class="options">
                            <a href="#" class="edit">edit</a>
                            <a href="#" class="remove">remove</a>
                        </div>
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
                <p>© 2017–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
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