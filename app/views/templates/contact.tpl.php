   <!-- Contact Page's Start -->
   <section>
       <div class="container w-75 bg-light border border-1 rounded border-opacity-75 shadow my-5 text-muted">
           <div class="row text-center">
               <h1 class="display-6 text-uppercase fs-3 pt-3">Have some questions?</h1>
               <p class="fs-5 fw-light">If you have any question or remark, contact us, or write your message!</p>
           </div>

           <div class="row align-items-center mx-5 justify-content-center">
               <div class="col-12 col-lg-6 text-center my-4 my-lg-0 align-self-lg-center pb-lg-5">
                   <ul class="list-unstyled">
                       <li class="mb-3">
                           <i class="bi bi-geo fs-2 p-0 m-0"></i>
                           <h2 class="display-5 text-uppercase fs-5 p-0 m-0 mb-2">Visit our office:</h2>
                           <p class="p-0 m-0 lh-1">
                               <span class="fst-italic fw-bold">6000, Kecskemét, Homokszem u. 3-6, HU</span>
                           </p>

                       </li>

                       <li class="mb-3">
                           <i class="bi bi-phone fs-2 p-0 m-0"></i>
                           <h2 class="display-5 text-uppercase fs-5 p-0 m-0 mb-2">our customer service:</h2>
                           <p class="p-0 m-0 lh-1">
                               <span class="fst-italic fw-bold">+ 01 234 567 89</span>
                               <br>
                               <span class="fw-normal">Weekdays, from 8 am to 4 pm!</span>
                           </p>
                       </li>

                       <li>
                           <i class="bi bi-envelope fs-2 p-0 m-0"></i>
                           <h2 class="display-5 text-uppercase fs-5 p-0 m-0 mb-2">our email address:</h2>
                           <p class="p-0 m-0 lh-1">
                               <span class="fst-italic fw-bold">info@shoosh.com</span>
                           </p>
                       </li>
                   </ul>
               </div>

               <div class="col-12 col-lg-6 text-center my-3">
                   <form id="contact-form" name="contact-form" action="?contact" method="POST">
                       <div class="form-outline mb-4 text-start">
                           <label class="" for="pwd"><i class="bi bi-person-fill mx-1"></i>Name</label>
                           <input type="name" id="name" name="name" class="form-control form-control-md" placeholder="John"/>
                       </div>

                       <div class="form-outline mb-4 text-start">
                           <label class="" for="email"><i class="bi bi-envelope-at-fill mx-1"></i>Your E-mail</label>
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