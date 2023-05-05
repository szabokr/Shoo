<?php
require_once('./app/controllers/ShoeController.php');
$shoes = ShoeController::list();
$brands = ShoeController::listBrands();
?>

<!-- <div class="p-0"> -->
<div class="container bg-light">

    <div class="row">
        <div class="col-12 border border-1 rounded border-opacity-75 shadow">
            <div class="row border-bottom align-items-center">
                <div class="col-9 d-flex justify-content-start footeropacity">
                    <i class="bi bi-database-add ms-1 dashboardIconSize"></i>
                    <h1 class="ms-2 display-5">Shoes</h1>

                </div>
                <div class="col-3 text-end">
                    <button class="btn btn-success btn-md me-1 dashboardAdd shadow" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="" method="POST">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container m-1">

                                    <div class="row">
                                        <label class="form-label">Brand</label>
                                        <select id="brands_id" name="brands_id" class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <?php
                                            // var_export($brands);
                                            foreach ($brands as $value) {
                                                echo '<option value="' . $value["id"] . '">' . $value["brand"] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <label class="form-label">Type</label>
                                        <input id="type" name="type" type="text" class="form-control" placeholder="name@example.com">
                                    </div>

                                    <div class="row">
                                        <label for="" class="form-label">Price</label>
                                        <input id="price" name="price" type="text" class="form-control" placeholder="name@example.com">
                                    </div>

                                    <div class="row">
                                        <label for="" class="form-label">Picture</label>
                                        <input id="picture" name="picture" type="file" class="form-control">
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="create" value="create" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <?php

            $headers = array(
                "Actions",
                "Id",
                "Brand",
                "Type",
                "Price",
                "Picture"
            );


            echo '<div class="row mx-1">';
            echo '<table class="table-light table-striped table-hover table-bordered border-dark rounded my-3">';
            echo '<thead>';
            echo '<tr>';
            foreach ($headers as $value) {
                echo '<th class="text-center">' . $value . '</th>';
            }
            echo '</tr>';
            echo '</thead>';
            echo '<tbody class="footeropacity">';
            foreach ($shoes as $shoe) {
                echo '<tr>';
                echo '
                                <th scope="row" class="text-center">
                                    <form action="" method="post">
                                        <input type="hidden" name="shoeId" value="' . $shoe['id'] . '">
                                            <button type="submit" name="delete" value="delete" class="btn btn-danger ms-1 delete-button">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                    </form>
            </div>
                                </th>';
                echo '
                        <td class="text-center">' . $shoe["id"] . '</td>
                        <td>' . $shoe["brand"] . '</td>
                        <td>' . $shoe["type"] . '</td>
                        <td>' . $shoe["price"] . '</td>
                        <td>' . $shoe["picture"] . '</td>
                        ';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            ?>

            <?php
            if (isset($_POST['delete'])) {
                $shoeId = $_POST['shoeId'];
                $response = ShoeType::deleteShoe($shoeId);
            }

            if (isset($_POST['create'])) {
                // $target_dir = "images/";
                // $target_file = $target_dir . basename($_FILES["fileToUpload"]["picture"]);
                // $uploadOk = 1;
                // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // // Check if image file is a actual image or fake image
                // if(isset($_POST["submit"])) {
                //   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                //   if($check !== false) {
                //     echo "File is an image - " . $check["mime"] . ".";
                //     $uploadOk = 1;
                //   } else {
                //     echo "File is not an image.";
                //     $uploadOk = 0;
                //   }
                // }


                // File upload path
                $targetDir = "images/";
                $fileName = $_POST['picture'];
                // var_export($_POST["picture"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                if (!empty($_FILES["file"]["name"])) {
                    // Allow certain file formats
                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server
                        move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
                    }
                };
                ShoeController::save($_POST);
            }
            ?>

            <!-- Modal -->
            <!-- <div class="modal fade" id="deleteModal" name="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->



            <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-euV7ZnwrFpfCg7Ej6Qdqf0yq3Fy0a6wjhgUfRkY7VhU0I/Z8A7KehiLfBTVyVwRu" crossorigin="anonymous"></script> -->

            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            </script>
            </body> -->