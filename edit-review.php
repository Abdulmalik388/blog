<?php
// Include database configuration file
require 'config.php';

// Check if the ID is provided via GET
if (isset($_GET['id'])) {
    $id = base64_decode(urldecode($_GET['id']));

    // Fetch the existing data for the given ID
    $query = $conn->prepare("SELECT * FROM review WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "User not found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $love = htmlspecialchars($_POST['love']);
    $hate = htmlspecialchars($_POST['hate']);
    $rate = htmlspecialchars($_POST['rate']);


    // Update the user's data
    $updateQuery = $conn->prepare("UPDATE review SET 
        name = :name, love = :love, 
        hate = :hate, rate = :rate 
        WHERE id = :id");

    $updateQuery->bindParam(':name', $name);
    $updateQuery->bindParam(':love', $love);
    $updateQuery->bindParam(':hate', $hate,);
    $updateQuery->bindParam(':rate', $rate);
    $updateQuery->bindParam(':id', $id, PDO::PARAM_INT);

    if ($updateQuery->execute()) {
        echo "User updated successfully!";
        header("Location: reviews-table.php");
        exit;
    } else {
        echo "Failed to update user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update review</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Update User</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name"> Name</label>
            <input type="text" id="name" name="name" class="form-control"
                value="<?= htmlspecialchars($user['name']); ?>" required>

            <label for="love">Email</label>
            <input type="text" id="love" name="love" class="form-control"
                value="<?= htmlspecialchars($user['love']); ?>" required>
            <label for="hate">Phone</label>
            <input type="text" id="hate" name="hate" class="form-control"
                value="<?= htmlspecialchars($user['hate']); ?>" required>
                <label for="rate">Message</label>
                <input type="text" id="rate" name="rate" class="form-control"
                value="<?= htmlspecialchars($user['rate']); ?>" required>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
   
</body>

</html>