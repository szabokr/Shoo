<?php
include('../../controllers/UserController.php');
$datas = UserController::list();
foreach ($datas as $data) {
    $headers = array_keys($data);
    break;
}
echo "<table>";
echo "<thead>";
echo "<tr>";
foreach ($headers as $header) {
    echo "<td>" . ucfirst($header) . "</td>";
}
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($datas as $data) {
    echo "<tr>";
    foreach ($headers as $header) {
        echo "<td>" . $data[$header] . "</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
