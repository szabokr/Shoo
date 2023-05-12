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
                                        <option selected>Select!</option>
                                        <?php
                                        include('../../controllers/ShoeController.php');
                                        $brands = ShoeController::listBrands();

                                        foreach ($brands as $value) {
                                            echo '<option value="' . $value["id"] . '">' . $value["brand"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="row">
                                    <label class="form-label">Type</label>
                                    <input id="type" name="type" type="text" class="form-control"  placeholder="Example Type">
                                </div>

                                <div class="row">
                                    <label for="" class="form-label">Price</label>
                                    <input id="price" name="price" type="text" class="form-control" placeholder="$XXX">
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