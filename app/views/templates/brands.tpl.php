<?php
require_once('./app/controllers/BrandController.php');
$brands = Brands::getBrands();
?>

<!-- <div class="p-0"> -->
<div class="container bg-light mt-5">

    <div class="row">
        <div class="col-12 border border-1 rounded border-opacity-75 shadow">
            <div class="row border-bottom align-items-center">
                <div class="col-9 d-flex justify-content-start footeropacity">
                    <i class="bi bi-database-add ms-1 dashboardIconSize"></i>
                    <h1 class="ms-2 display-5 text-uppercase">Brands</h1>

                </div>
                <div class="col-3 text-end">
                    <button class="btn btn-success btn-md me-1 dashboardAdd shadow" data-bs-toggle="modal" data-bs-target="#brandAddModal">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="brandAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="" method="POST">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add new Brand</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container m-1">
                                    <div class="row">
                                        <label class="form-label">Brand</label>
                                        <input id="brand" name="brand" type="text" class="form-control" placeholder="Brand">
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
            foreach ($brands as $brand) {
                echo '<tr>';
                echo '
                                <th scope="row" class="text-center">
                                    <form action="" method="post">
                                        <input type="hidden" name="brandId" value="' . $brand['id'] . '">
                                            <button type="submit" name="delete" value="delete" class="btn btn-danger ms-1 delete-button">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                    </form>
            </div>
                                </th>';
                echo '
                        <td class="text-center">' . $brand["id"] . '</td>
                        <td>' . $brand["brand"] . '</td>
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
                $brand = $_POST['brandId'];
                $response = Brands::deleteBrand($brand);
            }

            if (isset($_POST['create'])) {
                Brands::createBrand($_POST);
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