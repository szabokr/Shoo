    <!-- Login Page's Start -->
    <section class="bg-image bg-head">
        <div class="mask d-flex align-items-center gradient-custom-3 py-5">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center needs-validation">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card shadow bg-light border border-1 rounded border-opacity-75 shadow my-5 text-muted loginCard">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5 display-6 text-muted">Sign In</h2>
                                <form action="?login" method="post">
                                    <div class="form-outline mb-4">
                                        <label class="" for="email"><i
                                                class="bi bi-envelope-at-fill mx-1"></i>E-mail</label>
                                        <input type="email" id="email" name="email"
                                            pattern="([a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9]))"
                                            class="form-control form-control-md mb-4" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="" for="password"><i class="bi bi-lock-fill mx-1"></i>Password</label>
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-md" required />
                                    </div>
                                    <div class="">

                                        <p class="text-left">Forgot Your Password?&nbsp;<a href="#"
                                                class="fw-normal text-body"><u>Click here!</u></a></p>

                                        <div class="form-check mb-5">
                                            <label class="form-check-label" for="rememberMe">Remember Me
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="rememberMe" />
                                            </label>
                                        </div>

                                    </div>


                                    <div class="d-grid gap-2">
                                     <button for="submit" value="1" name="submit" id="liveToastBtn" class="btn btn-outline-success btn-block btn-lg gradient-custom-4">Login</button>
                                 </div>



                                    <p class="text-center text-muted mt-5 mb-5">Dont have an account? <a
                                            href="/view/register/register.html" class="fw-normal text-body"><u>Sign Up here!</u></a>
                                    </p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <?php
    require realpath(__DIR__ . '/../../controllers/UserController.php');
    if (isset($_POST['submit'])) {
        $response= UserController::login($_POST);
        include('toaster.tpl.php');
    }
    ?>