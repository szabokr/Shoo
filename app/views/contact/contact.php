   <!-- Contact Page's Start -->
   <section>
       <div class="container w-75 bg-light border border-1 rounded border-opacity-75 shadow my-5 text-muted">
           <div class="row text-center">
               <h1 class="display-6 text-uppercase fs-3 pt-3">Have some questions?</h1>
               <p class="fs-5 fw-light">If you have any question or remark, please let us know!</p>
           </div>

           <div class="row align-items-center mx-5 justify-content-center">
               <div class="col-12 col-lg-6 text-center my-4 my-lg-0 align-self-lg-center pb-lg-5">
                   <img src="images/contactPageImage/letter.png" class="img-fluid w-75 py-0 pe-lg-5" alt="contact us">
               </div>

               <div class="col-12 col-lg-6 text-center my-3">
                   <form id="contact-form" name="contact-form" action="contact.php" method="POST">
                       <div class="form-outline mb-4 text-start">
                           <label class="" for="pwd"><i class="bi bi-person-fill mx-1"></i>Name</label>
                           <input type="name" id="name" name="name" class="form-control form-control-md" placeholder="John" required />
                       </div>

                       <div class="form-outline mb-4 text-start">
                           <label class="" for="email"><i class="bi bi-envelope-at-fill mx-1"></i>E-mail</label>
                           <input type="email" id="email" name="email" class="form-control form-control-md mb-4" placeholder="example@email.com" required />
                       </div>

                       <div class="form-outline mb-4 text-start">
                           <label class="" for="message"><i class="bi bi-envelope-fill mx-1"></i>Your message</label>
                           <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" placeholder="Type your problem here!"></textarea>
                       </div>

                       <button for="submit" value="1" name="submit" class="btn btn-outline-success btn-md gradient-custom-4 w-100">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </section>
   <!-- Contact Page's End -->

   <?php
    require realpath(__DIR__ . '../../../controllers/MessageController.php');
    if (isset($_POST['submit'])) {
        MessageController::create($_POST);
        // modal template hogy sikeres vagy nem sikeres a reg

    }

    function register()
    {
        if (isset($_POST['submit'])) {
            // UserController::create($data);
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        }
    }
    ?>