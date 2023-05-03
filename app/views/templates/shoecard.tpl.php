<?php
if (($index - 1) % 4 == 0) {
    echo '<div class="row">';
}
?>
<div class="col col-md-6 col-xl-3 text-center pb-5 d-flex justify-content-center">
    <div class="card carditem shadow cardwidth">
        <img src="<?= $value["picture"] ?>" class="object-fit-cover border rounded card-img-tp cardimgwidth" alt="an image of a shoe">
        <div class="card-body">
            <h5 class="card-title"><?= $value["brand"] . " " . $value["type"] ?></h5>
            <p class="card-text">$<?= $value["price"] ?></p>
            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add to cart</button>
        </div>
    </div>
</div>

<?php
if ($index % 4 == 0) {
    echo '</div>';
}
?>