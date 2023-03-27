<br>
<br>
<br>
<br>
   <?php
    include('./app/controllers/ShoeController.php');
  
    $shoes = ShoeController::list();
    
    echo '<section>';
    echo '<div class="container my-5">';
    $index = 0;
    foreach ($shoes as $value) {
        var_export ($value["count"]);
        var_export ($shoes);

        if ($index % 4 == 0) {
            echo '<div class="row">';
        }

        $shoename = $value["name"] . " " . $value["type"];

                echo '<div class="col col-md-6 col-xl-3 text-center pb-5 d-flex justify-content-center">';
                    echo '<div class="card carditem shadow cardwidth">';
                    echo '<img src=" ' . $value["picture_path"] . ' " class="object-fit-cover border rounded card-img-tp cardimgwidth" alt="an image of a shoe">';
                        echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . $shoename . '</h5>';
                            echo '<p class="card-text">$' . $value["price"] . '</p>';
                            echo '<button class="btn btn-outline-success">Add to cart</button>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

        if ($index % 4 == 0 && (int)($value["count"])==$index) {
            echo '</div>';
        }
        echo $index;
        $index++;
    }

    echo '</div>';
echo'</section>';
    ?>

   <!-- Seller Page's Start -->
   <!-- <section>
       <div class="container my-5">
           <div class="row">
               <div class="col col-md-6 col-xl-3 text-center pb-5 d-flex justify-content-center">
                   <div class="card carditem shadow cardwidth">
                       <img src="..." class="object-fit-cover border rounded card-img-tp cardimgwidth" alt="an image of a shoe">
                       <div class="card-body">
                           <h5 class="card-title"></h5>
                           <p class="card-text">$price</p>
                           <button class="btn btn-outline-success">Add to cart</button>
                       </div>
                   </div>
               </div>

               <div class="col col-md-6 col-xl-3 text-center pb-5 d-flex justify-content-center">
                   <div class="card carditem shadow cardwidth">
                       <img src="..." class="object-fit-cover border rounded card-img-tp cardimgwidth" alt="an image of a shoe">
                       <div class="card-body">
                           <h5 class="card-title">$shoename</h5>
                           <p class="card-text">$price</p>
                           <button class="btn btn-outline-success">Add to cart</button>
                       </div>
                   </div>
               </div>

               <div class="col col-md-6 col-xl-3 text-center pb-5 d-flex justify-content-center">
                   <div class="card carditem shadow cardwidth">
                       <img src="..." class="object-fit-cover border rounded card-img-tp cardimgwidth" alt="an image of a shoe">
                       <div class="card-body">
                           <h5 class="card-title">$shoename</h5>
                           <p class="card-text">$price</p>
                           <button class="btn btn-outline-success">Add to cart</button>
                       </div>
                   </div>
               </div>

               <div class="col col-md-6 col-xl-3 text-center pb-5 d-flex justify-content-center">
                   <div class="card carditem shadow cardwidth">
                       <img src="..." class="object-fit-cover border rounded card-img-tp cardimgwidth" alt="an image of a shoe">
                       <div class="card-body">
                           <h5 class="card-title">$shoename</h5>
                           <p class="card-text">$price</p>
                           <button class="btn btn-outline-success">Add to cart</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section> -->
   <!-- Seller Page's End -->