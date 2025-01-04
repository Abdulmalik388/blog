<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <?php
    include("include/navbar.php");
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Let's Talk</h2>
                <p class="text-center text-muted">We'd love to hear from you! Fill out the form below to get in touch.
                </p>
                <form action="lettaalk.php" method="POST">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name"
                            required>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"
                            required>
                    </div>
                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control"
                            placeholder="Enter your phone number" required>
                    </div>
                    <!-- Message -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea id="message" name="message" class="form-control" rows="4"
                            placeholder="Enter your message here" required></textarea>
                    </div>
                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div><br><br><br><br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require 'config.php';

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        try {
            $stmt = $conn->prepare("INSERT INTO lettaalk (name,  email,  phone, message) VALUES (:name,   :email,  :phone, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':message', $message);
            $stmt->execute();

            exit;
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { // Duplicate entry error
                echo "<p class='error text-success ' >You Have successfully Messaged Us. You Can Go Back Home</p>";
            } else {
                echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
            }
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    include("include/footer.php");
    ?>

</body>

</html>