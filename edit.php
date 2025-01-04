<?php
// Include database configuration file
require 'config.php';

// Check if the ID is provided via GET
if (isset($_GET['id'])) {
    $id = base64_decode(urldecode($_GET['id']));

    // Fetch the existing data for the given ID
    $query = $conn->prepare("SELECT * FROM lettaalk WHERE id = :id");
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
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);


    // Update the user's data
    $updateQuery = $conn->prepare("UPDATE lettaalk SET 
        name = :name, email = :email, 
        phone = :phone, message = :message 
        WHERE id = :id");

    $updateQuery->bindParam(':name', $name);
    $updateQuery->bindParam(':email', $email);
    $updateQuery->bindParam(':phone', $phone, PDO::PARAM_STR);
    $updateQuery->bindParam(':message', $message);
    $updateQuery->bindParam(':id', $id, PDO::PARAM_INT);

    if ($updateQuery->execute()) {
        echo "User updated successfully!";
        header("Location: lettaalk_taable.php");
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
    <title>Update Message</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Update User</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name"> Name</label>
            <input type="text" id="name" name="name" class="form-control"
                value="<?= htmlspecialchars($user['name']); ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control"
                value="<?= htmlspecialchars($user['email']); ?>" required>
            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone" class="form-control"
                value="<?= htmlspecialchars($user['phone']); ?>" required>
                <label for="message">Message</label>
                <input type="text" id="message" name="message" class="form-control"
                value="<?= htmlspecialchars($user['message']); ?>" required>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
   
</body>

</html>