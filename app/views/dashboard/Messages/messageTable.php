<?php
// var_export(realpath(__DIR__ . '../../dashboard.php'));
include realpath(__DIR__ . '../../dashboard_header.php');
// var_export(realpath(__DIR__ . '../../../../controllers/MessageController.php'));
include realpath(__DIR__ . '../../../../controllers/MessageController.php');
$messages = MessageController::list();

?>

<div class="p-0">
    <header class="d-flex flex-wrap justify-content-center pb-3">
        <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4 display-5 ">Messages</span>
        </a>
    </header>
</div>

<?php

$headers = array(
    "Action",
    "Name",
    "Email",
    "Message",
    "Created At",
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
foreach ($messages as $message) {
    echo '<tr>';
    echo '
    <td>
        <button type="button" class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#deleteModal">
            <i class="bi bi-trash3"></i>
        </button>
    </td>';
    echo '
    <td>' . $message["name"] . '</td>
    <td>' . $message["email"] . '</td>
    <td>' . $message["message"] . '</td>
    <td>' . $message["created_at"] . '</td>
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





<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<?php include realpath(__DIR__ . '../../dashboard_footer.php')?>