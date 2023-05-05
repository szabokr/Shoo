<?php 
 include('./app/controllers/UserController.php');

 $user = UserController::getProfile($_SESSION["user_id"]);
var_export($user["id"]);
?>
<section>
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-lg-4">
        <div class="card cardBorders bg-light shadow">
          <div class="card-body text-center d-inline-flex flex-column align-items-center justify-content-center">
            <div class="mt-3 profilePic position-relative flex-shrink-0 shadow mb-3">
              <img src="images/commonImages/ldy.jpg" class="rounded-circle img-fluid" />
              <button type="button" class="btn iconhover position-absolute top-50 start-50 translate-middle hideButton btn-lg">
                <i class="bi bi-pencil-square fs-1"></i>
              </button>
            </div>
            <h4 class="mb-2 display-6"><?php echo $user["name"] ?></h4>
            <!-- <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a href="#!">mdbootstrap.com</a></p> -->
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">8471</p>
                <p class="text-muted mb-0">Wallets Balance</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">8512</p>
                <p class="text-muted mb-0">Income amounts</p>
              </div>
              <div>
                <p class="mb-2 h5">4751</p>
                <p class="text-muted mb-0">Total Transactions</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-5 my-5 my-lg-0">

        <div class="card cardBorders bg-light shadow">
          <div class="card-header">
            <h1 class="display-6">Personal Information</h1>
          </div>
          <div class="card-body d-inline-flex flex-column align-items-center justify-content-center">
            <table class="table p-0 m-0">
              <tbody>
                <tr>
                  <th scope="row">Full name:</th>
                  <td class="text-end"><?php echo $user["name"] ?></td>
                  <td class="text-center"><i class="bi bi-pen iconhover"></i></td>
                </tr>
                <tr>
                  <th scope="row">Email:</th>
                  <td class="text-end"><?php echo $user["email"] ?></td>
                  <td class="text-center"><i class="bi bi-pen iconhover"></i></td>
                </tr>
                <tr>
                  <th scope="row">Password:</th>
                  <td class="text-end">*********</td>
                  <td class="text-center"><i class="bi bi-pen iconhover"></i></td>
                </tr>
                <tr>
                  <th scope="row">Number:</th>
                  <td class="text-end"><?php echo $user["phone_number"] ?></td>
                  <td class="text-center"><i class="bi bi-pen iconhover"></i></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td class="text-end"></td>
                </tr>
                <tr>
                  <th scope="row">ZIP Code:</th>
                  <td class="text-end"><?php echo $user["zip_code"] ?></td>
                </tr>
                <tr>
                  <th scope="row">Street:</th>
                  <td class="text-end"><?php echo $user["street"] ?></td>
                </tr>
                <tr>
                  <th scope="row">House Number:</th>
                  <td class="text-end"><?php echo $user["house_number"] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Profile Page's End -->