<section class="bg-image bg-head">
    <div class="mask d-flex align-items-center gradient-custom-3 py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card shadow registerCard bg-light border border-1 rounded border-opacity-75 shadow my-5 text-muted">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5 display-6 text-muted">Create an account</h2>

                            <form action="?register" method="POST" onsubmit="return check();">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <label class="" for="firstName"><i class="bi bi-person-fill mx-1"></i>First Name<span class="requiredInput">*</span></label>
                                            <input type="text" id="firstName" name="firstName" class="form-control form-control-md" placeholder="John" required />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <label class="" for="lastName"><i class="bi bi-person-fill mx-1"></i>Last Name<span class="requiredInput">*</span></label>
                                            <input type="text" id="lastName" name="lastName" class="form-control form-control-md" placeholder="Doe" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <label class="" for="email"><i class="bi bi-envelope-at-fill mx-1"></i>E-mail<span class="requiredInput">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control form-control-md" placeholder="example@email.com" required />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <label class="" for="password"><i class="bi bi-lock-at-fill mx-1"></i>Password<span class="requiredInput">*</span></label>
                                            <input type="password" id="password" name="password" class="form-control form-control-md" placeholder="eX4mPL3pWD&" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-bottom pb-3">

                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <label class="" for="phone_number"><i class="bi bi-phone-fill mx-1"></i>Number<span class="requiredInput">*</span></label>
                                            <input type="text" id="phone_number" name="phone_number" class="form-control form-control-md" placeholder="+36 (XX) XXX-XXXX" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row pt-4 justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-10">
                                        <div class="form-outline mb-4">
                                            <label class="" for="zip_code"><i class="bi bi-cursor-fill mx-1"></i>ZIP Code<span class="requiredInput">*</span></label>
                                            <input type="text" id="zip_code" name="zip_code" class="form-control form-control-md" placeholder="1234" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-10">
                                        <div class="form-outline mb-4">
                                            <label class="" for="city"><i class="bi bi-geo-fill mx-1"></i>City<span class="requiredInput">*</span></label>
                                            <input type="text" id="city" name="city" class="form-control form-control-md" placeholder="Manvel" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-10">
                                        <div class="form-outline mb-4">
                                            <label class="" for="street"><i class="bi bi-signpost-split-fill mx-1"></i>Street<span class="requiredInput">*</span></label>
                                            <input type="text" id="street" name="street" class="form-control form-control-md" placeholder="Main Street" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-10">
                                        <div class="form-outline mb-4">
                                            <label class="" for="house_number"><i class="bi bi-house-fill mx-1"></i>House Number<span class="requiredInput">*</span></label>
                                            <input type="text" id="house_number" name="house_number" class="form-control form-control-md" placeholder="101" required />
                                        </div>
                                    </div>
                                </div>



                                <div class="form-check d-flex justify-content-center mb-5">
                                    <label class="form-check-label" for="agreements">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                service<span class="requiredInput">*</span></u></a>
                                        <input class="form-check-input me-2" type="checkbox" id="agreements" required />
                                    </label>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" value="Send" onclick="check();" name="submit" id="send" class="btn btn-outline-success btn-block btn-lg gradient-custom-4">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="../login/index.php" class="text-body"><u>Login here</u></a></p>

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
require realpath(__DIR__ . '/../../controllers/UserController.php');
if (isset($_POST['submit'])) {
    $response = UserController::create($_POST);
    include('toaster.tpl.php');
}
?>

