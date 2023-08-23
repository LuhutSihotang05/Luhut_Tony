<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Sanitize and validate the ID

    // Create the DELETE query
    $sql = "DELETE FROM sekretariatdprd WHERE id = $id";

    // Execute the query
    if (mysqli_query($db, $sql)) {
        // Provide a success response, if needed
        http_response_code(200);
        echo "Record deleted successfully.";
    } else {
        // Provide an error response
        http_response_code(500);
        echo "Error deleting record: " . mysqli_error($db);
    }
} else {
    http_response_code(400);
    echo "Invalid request.";
}
?>
