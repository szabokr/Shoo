<?php
require_once('./app/controllers/ShoeController.php');
$shoes = ShoeController::list();
$brands = ShoeController::listBrands();
?>

<div class="container bg-light mt-5">
    <div class="row">
        <div class="col-12 border border-1 rounded border-opacity-75 shadow">
            <div class="row border-bottom align-items-center">
                <div class="col-9 d-flex justify-content-start footeropacity">
                    <i class="bi bi-database-add ms-1 dashboardIconSize"></i>
                    <h1 class="ms-2 display-5 text-uppercase">Shoes</h1>
                </div>
                <div class="col-3 text-end">
                    <button class="btn btn-success btn-md me-1 dashboardAdd shadow" data-bs-toggle="modal" data-bs-target="#shoeAddModal">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>
            </div>
            <!-- Add Modal -->
            <div class="modal fade" id="shoeAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="" method="POST">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add new Shoe</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container m-1">

                                    <div class="row">
                                        <label class="form-label">Brand</label>
                                        <select id="brands_id" name="brands_id" class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <?php
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

                $targetDir = "images/";
                $fileName = $_POST['picture'];
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                if (!empty($_FILES["file"]["name"])) {
                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                    if (in_array($fileType, $allowTypes)) {
                        move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
                    }
                };
                ShoeController::save($_POST);
            }
            ?>