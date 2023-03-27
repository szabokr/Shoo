<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shoooooosh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="app/views/templates/header/header.css" />
    <link rel="stylesheet" href="app/views/templates/footer/footer.css" />
    <link rel="stylesheet" href="app/views/landing_page/landingPage.css" />
    <link rel="stylesheet" href="app/views/partners/partners.css" />
    <link rel="stylesheet" href="app/views/seller/seller.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-euV7ZnwrFpfCg7Ej6Qdqf0yq3Fy0a6wjhgUfRkY7VhU0I/Z8A7KehiLfBTVyVwRu" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-tSazlPT9oKj+vOGHwxWVT+n1g4LzzIjy1CrCpK5xKM8Gv5z9Q5I5n5P5W5n5Un5+" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Navbar's Start -->
    <section>
        <br><br><br>
        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary navbar-dark bg-dark fs-5" data-bs-theme="dark">
            <a class="navbar-brand ms-5" href="index.php"><img class="shooshlogo" src="images/commonImages/logo_v2.png"></a>
            <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ">
                    <li class="nav-item text-uppercase underline text-center">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item text-uppercase underline text-center">
                        <a class="nav-link" href="seller.php">Offers</a>
                    </li>

                    <li class="nav-item text-uppercase underline text-center">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>

                    <li class="nav-item text-uppercase underline text-center">
                        <a class="nav-link" href="partners.php">Partners</a>
                    </li>
                </ul>

                <ul class="nav-link d-flex my-1 me-0 me-lg-4 justify-content-center align-items-center">
                    <li class="nav-link naviconhover mx-2"><a href="#"><i class="bi bi-facebook shooshcolor"></i></a></li>
                    <li class="nav-link naviconhover mx-2"><a href="#"><i class="bi bi-twitter shooshcolor"></i></a></li>
                    <li class="nav-link naviconhover mx-2"><a href="#"><i class="bi bi-instagram shooshcolor"></i></a></li>
                    <li class="nav-link naviconhover mx-2"><a href="#"><i class="bi bi-youtube shooshcolor"></i></a></li>
                    <li class="nav-link naviconhover mx-2"><a href="#"><i class="bi bi-google shooshcolor"></i></a></li>
                    <li class="nav-link naviconhover mx-2"><a href="#"><i class="bi bi-github shooshcolor"></i></a></li>

                </ul>

                <div class="d-lg-inline-flex text-center align-items-center my-4 my-lg-0 me-lg-5">
                    <div class="nav-item mb-4 mb-lg-0 me-lg-2">
                        <a href="login.php">
                            <button class="btn btn-outline-secondary btn-md shooshcolor" type="submit">Login</button>
                        </a>
                    </div>

                    <div class="nav-item">
                        <a href="register.php">
                            <button class="btn btn-success btn-md" type="submit">SignUp</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar's End -->