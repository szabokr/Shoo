<?php
include('./app/controllers/MessageController.php');
$messages = MessageController::list();

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
    <form action="" method="post">
    <input type="hidden" name="messageId" value="' . $message['id'] . '">
    <button type="submit" name="deleteMessage" class="btn btn-danger ms-1 delete-button">
            <i class="bi bi-trash3"></i>
        </button>
</form>

       
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure about deleting that message?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="confirm-delete-button">Delete</button>
            </div>
        </div>
    </div>
</div> -->
<!-- <script>
    const deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach(button => {
    button.addEventListener('click', () => {
        const messageId = button.getAttribute('data-message-id');
        const messageIdField = document.getElementById('messageIdField');
        messageIdField.value = messageId;
        button.closest('form').submit();
    });
});

</script> -->


<?php 
if (isset($_POST['messageId'])) {
    $messageId = $_POST['messageId'];
    $response=Message::deleteMessage($messageId);
}
?> 



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>