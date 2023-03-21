  <!-- Register Page's Start -->
  <section class="bg-image bg-head">
      <div class="mask d-flex align-items-center gradient-custom-3 py-5">
          <div class="container">
              <div class="row d-flex justify-content-center align-items-center">
                  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                      <div class="card opacity shadow" style="border-radius: 15px;">
                          <div class="card-body p-5">
                              <h2 class="text-uppercase text-center mb-5 display-6 text-muted">Create an account</h2>

                              <form action="index.php" method="POST">
                                  <div class="row">
                                      <div class="col">
                                          <div class="form-outline mb-4">
                                              <label class="" for="firstName"><i class="bi bi-person-fill mx-1"></i>First Name<span style="color:red">*</span></label>
                                              <input type="text" id="firstName" name="firstName" pattern="[A-Za-z]{3,15}" class="form-control form-control-md" placeholder="Random" required />
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form-outline mb-4">
                                              <label class="" for="lastName"><i class="bi bi-person-fill mx-1"></i>Last Name<span style="color:red">*</span></label>
                                              <input type="text" id="lastName" name="lastName" pattern="[A-Za-z]{3,15}" class="form-control form-control-md" placeholder="Name" required />
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-outline mb-4">
                                      <label class="" for="email"><i class="bi bi-envelope-at-fill mx-1"></i>E-mail<span style="color:red">*</span></label>
                                      <input type="email" id="email" name="email" pattern="([a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9]))" class="form-control form-control-md" placeholder="example@email.com" required />
                                  </div>
                                  <!-- 
                                    <div class="form-outline mb-4">
                                        <label class="" for="password"><i class="bi bi-lock-fill mx-1"></i>Password<span
                                                style="color:red">*</span></label>
                                        <input type="password" id="password" name="password"
                                            pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,30})"
                                            class="form-control form-control-md" placeholder="exa2&M-1ple3" required />
                                        <p class="fw-light text-left fs-6 lh-1">
                                            Your password needs to be between 8 and 30 characters long and contain at
                                            least one uppercase letter, one symbol, and a number.
                                        </p>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="" for="confirmPassword"><i
                                                class="bi bi-lock-fill mx-1"></i>Confirm your password<span
                                                style="color:red">*</span></label>
                                        <input type="password" id="confirmPassword" name="confirmPassword"
                                            class="form-control form-control-md" placeholder="exa2&M-1ple3" required />
                                    </div> -->

                                  <div class="form-check d-flex justify-content-center mb-5">
                                      <label class="form-check-label" for="agreements">
                                          I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                  service<span style="color:red">*</span></u></a>
                                          <input class="form-check-input me-2" type="checkbox" id="agreements" required />
                                      </label>
                                  </div>

                                  <div class="d-grid gap-2">
                                      <button for="submit" value="1" name="submit" class="btn btn-outline-success btn-block btn-lg gradient-custom-4">Register</button>
                                  </div>

                                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                              </form>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Register Page's End -->

  <?php
    require realpath(__DIR__.'/../../../controllers/UserController.php' );
if (isset($_POST['submit'])){
    var_export($_POST);
    UserController::create($_POST);
    var_export(UserController::create($_POST));

    header('Location: http://www.google.com/');
}

    function register()
    {
        if (isset($_POST['submit'])) {
            // UserController::create($data);
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        }
    }
    ?>