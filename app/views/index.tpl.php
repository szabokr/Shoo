<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shoooooosh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="app/views/css/index.css" />
    <link rel="stylesheet" href="app/views/css/landingPage.css" />
    <link rel="stylesheet" href="app/views/css/login.css" />
    <link rel="stylesheet" href="app/views/css/seller.css" />
    <link rel="stylesheet" href="app/views/css/register.css" />
    <link rel="stylesheet" href="app/views/css/profilePage.css" />
    <link rel="stylesheet" href="app/views/css/partners.css" />
    <link rel="stylesheet" href="app/views/css/dashboard.css" />
    <script type="text/javascript" src="app/views/js/register.js"></script>

</head>

<body>
    <br><br><br>
    <?php include('./app/views/templates/cartSystem.tpl.php') ?>
    <nav class="navbar fixed-top navbar-expand-xl bg-body-tertiary navbar-dark bg-dark fs-5" data-bs-theme="dark">
        <a class="navbar-brand ms-5" href=""><img class="shooshlogo" src="images/commonImages/logo_v2.png"></a>
        <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <?php
                foreach ($pages as $url => $page) {
                    if (($_SESSION != null && $_SESSION['permission'] == 0 && $page['visible'] == 0) || ($_SESSION != null && $_SESSION['permission'] == 1 && $page['visible'] == 1) || ($_SESSION == null && $page['visible'] == 0)) {
                ?>
                        <li class="nav-item text-uppercase underline text-center" <?= (($page == $find) ? ' class="active"' : '') ?>>
                            <a class="nav-link" href="<?= ($url == '/') ? '.' : $url ?>">
                                <?= $page['text'] ?></a>
                        </li>

                <?php }
                } ?>
            </ul>

            <ul class="nav-link d-flex my-1 me-0  justify-content-center align-items-center">
                <?php foreach ($social as $value) {
                    echo '<li class="nav-link naviconhover mx-2"><a href="' . $value['url'] . '"><i class="bi ' . $value['name'] . ' shooshcolor"></i></a></li>';
                } ?>
                <?php
                if (!($_SESSION != NULL && $_SESSION['permission'] == 1)) { ?>
                    <li class="nav-link mx-2 mx-xl-0 ms-xl-5 navProfileIco"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-bag-check-fill shooshcolor"></i></a></li>

                <?php }
                ?>
                <li class="nav-link ">
                    <?php
                    if ($_SESSION != NULL && $_SESSION['user_id']) { ?>
                        <div class="mx-2">
                            <a href="?profilePage" class="d-flex align-items-center text-white text-decoration-none text-muted">
                                <div class="nav-link navProfileIco"><i class="bi bi-person-circle shooshcolor"></i></div>
                            </a>
                        </div>
                    <?php }
                    ?>

                </li>
            </ul>
            <?php
            if (!($_SESSION != NULL && $_SESSION['user_id'])) { ?>
                <div class="d-xl-inline-flex text-center align-items-center my-4 my-xl-0 me-xl-5">
                    <div class="nav-item mb-4 mb-xl-0 me-xl-2">
                        <a href="?login">
                            <button class="btn btn-outline-secondary btn-md shooshcolor ms-2" type="submit">Login</button>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="?register">
                            <button class="btn btn-success btn-md" type="submit">Sign Up</button>
                        </a>
                    </div>
                </div>
            <?php } else { ?>
                <a href="?logout">
                    <button class="btn btn-outline-secondary btn-md shooshcolor me-5" type="submit">Sign out</button>
                </a>
            <?php }
            ?>

        </div>
    </nav>

    <div id="content">
        <?php include("./app/views/templates/{$find['file']}.tpl.php"); ?>
    </div>

    <!-- Footer's start -->
    <?php
    if (!($_SESSION != NULL && $_SESSION['permission'] == 1)) { ?>
        <footer class="bg-dark text-center text-light footeropacity fs-5">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Social media -->
                <section class="mb-4 border-bottom shooshcolor">
                    <?php foreach ($social as $value) {
                        echo '<a class="btn btn-outline-light btn-floating my-3 mx-2 footericonhover" href="' . $value['url'] . '" role="button"><i class="bi ' . $value['name'] . '"></i></a>';
                    } ?>
                </section>
                <!-- Section: Social media -->

                <!-- Section: Text -->
                <section class="mb-4 shooshcolorstatic">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                        eum harum corrupti dicta, aliquam sequi voluptate quas.
                    </p>
                </section>
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="my-4">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase shooshcolorstatic">costumer care</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">Contact us</a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">FAQs</a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">Terms of service</a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">Privacy policy</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase shooshcolorstatic">Help</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">Seller's guide</a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">About us</a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline"></a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline"></a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                            <h5 class="text-uppercase shooshcolorstatic">My account</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">Sign In</a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">Register</a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">My shoes</a>
                                </li>
                                <li>
                                    <a href="#!" class="shooshcolor footerunderline">My oders</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 shooshcolorstatic copyrightbg">
                © 2023 Copyright:
                <a class="text-light shooshcolor" href="#">shoosh.com</a>
                All Rights Reserved.
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer's end -->
    <?php }
    ?>
</body>
</html>