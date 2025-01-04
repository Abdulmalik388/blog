<?php

require 'config.php';

if (isset($_GET['id'])) {
    // Decode the base64-encoded ID
    $id = base64_decode($_GET['id']);

    if ($id === false) {
        echo "Invalid ID provided.";
        exit;
    }

    // Delete the record
    $stmt = $conn->prepare("DELETE FROM lettaalk WHERE id = ?");
    $stmt->execute([$id]);

    echo "Record deleted successfully!";
    header("Location: lettaalk_taable.php"); // Redirect to the main page
    exit;
} else {
    echo "No ID provided.";
    exit;
}


?>