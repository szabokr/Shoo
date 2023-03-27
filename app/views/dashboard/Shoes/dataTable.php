<?php
include('../../controllers/ShoeController.php');
$shoes = ShoeController::list();
$brands = ShoeController::listBrands();
?>

<div class="p-0">
    <header class="d-flex flex-wrap justify-content-center pb-3">
        <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Shoes</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal"><i class="bi bi-plus-lg"></i></button>
            </li>
        </ul>
    </header>
    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="dataTable.php" method="POST">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container m-1">
                        
                                <div class="row">
                                    <label class="form-label">Brand</label>
                                    <select id="brand_id" name="brand_id"  class="form-select" aria-label="Default select example">
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
                                    <input id="type" name="type" type="text" class="form-control"  placeholder="name@example.com">
                                </div>

                                <div class="row">
                                    <label for="" class="form-label">Price</label>
                                    <input id="price" name="price" type="text" class="form-control" placeholder="name@example.com">
                                </div>

                                <div class="row">
                                    <label for="" class="form-label">Picture</label>
                                    <input id="picture" name="picture" type="file" class="form-control" >
                                </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button for="submit" value="1" name="submit" type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<?php
if (isset($_POST['submit'])) {
    var_export($_POST);
    // UserController::create($_POST);
    // var_export(UserController::create($_POST));

    // modal template hogy sikeres vagy nem sikeres a reg

    // header('Location: http://www.google.com/');
}
?>


<?php

$headers = array(
    "Actions",
    "Id",
    "Brand",
    "Type",
    "Price",
    "Picture"
);



echo '<table class="table table-dark table-striped">';
echo '<thead>';
echo '<tr>';
foreach ($headers as $value) {
    echo '<th>' . $value . '</th>';
}
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($shoes as $shoe) {
    echo '<tr>';
    echo '
    <td>
        <button type="button" class="btn btn-success me-1" data-bs-toggle="modal" data-bs-target="#updateModal">
            <i class="bi bi-pencil"></i>
        </button>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            <i class="bi bi-trash3"></i>
        </button>
    </td>';
    echo '
    <td>' . $shoe["id"] . '</td>
    <td>' . $shoe["brand"] . '</td>
    <td>' . $shoe["type"] . '</td>
    <td>' . $shoe["price"] . '</td>
    <td>' . $shoe["picture"] . '</td>
    ';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

</body>