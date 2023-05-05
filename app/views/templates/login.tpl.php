<?php
include('./app/controllers/UserController.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    try {
        if (isset($_POST['submit'])) {
            $response = UserController::login($_POST);
        }
    } catch (PDOException $e) {
        include('toaster.tpl.php');
        echo "Error: " . $e->getMessage();
    }
}


?>

<!-- Login Page's Start -->
<section class="bg-image bg-head">
    <div class="mask d-flex align-items-center gradient-custom-3 py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center needs-validation">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card shadow bg-light border border-1 rounded border-opacity-75 shadow my-5 text-muted loginCard">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5 display-6 text-muted">Sign In</h2>
                            <form method="post">
                                <div class="form-outline mb-4">
                                    <label class="" for="email"><i class="bi bi-envelope-at-fill mx-1"></i>E-mail</label>
                                    <input type="email" id="email" name="email" pattern="([a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9]))" class="form-control form-control-md mb-4" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="" for="password"><i class="bi bi-lock-fill mx-1"></i>Password</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-md" required />
                                </div>
                                <div class="">

                                    <p class="text-left">Forgot Your Password?&nbsp;<a href="#" class="fw-normal text-body"><u>Click here!</u></a></p>

                                    <div class="form-check mb-5">
                                        <label class="form-check-label" for="rememberMe">Remember Me
                                            <input class="form-check-input me-2" type="checkbox" value="" id="rememberMe" />
                                        </label>
                                    </div>

                                </div>
                                    <div class="d-grid gap-2">
                                        <input type="submit" name="submit" value="Login" data-bs-toggle="modal" data-bs-target="#asdasd" class="btn btn-outline-success btn-block btn-lg gradient-custom-4" />
                                    </div>

                                <p class="text-center text-muted mt-5 mb-5">Dont have an account? <a href="/view/register/register.html" class="fw-normal text-body"><u>Sign Up here!</u></a>
                                </p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="asdasd" tabindex="-1" aria-labelledby="asdasdLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="asdasdLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php 
            $response["message"];
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>