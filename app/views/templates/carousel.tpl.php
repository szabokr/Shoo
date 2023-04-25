<div class="carousel-item" data-bs-interval="5000">
    <img src="images/commonImages/<?= $carousel['image'] ?>.jpg" class="img-fluid landingPageCarousel" alt="<?= $carousel['alt'] ?>">
    <div class="carousel-caption fs-5">
        <h5 class="display-6 text-dark text-uppercase fw-bold"><?= $carousel['title'] ?></h5>
        <p class="text-uppercase fs-6 text-dark fw-bold">
        <?= $carousel['subtitle']?></p>
        <button class="btn btn-outline-dark btn-md fw-bold text-uppercase" type="submit"><?= $carousel['action']?></button>
    </div>
</div>
