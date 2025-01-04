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

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Document</title>
</head>

<body>
  <?php
  include("include/navbar.php");
  ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center text-success">REVIEWS</h2>
        <p class="text-center text-muted">We'd love to hear from you! Fill out the form below to get in touch.
        </p>
        <form action="reviews.php" method="POST">
          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">What You Love About Us</label>
            <input type="text" id="love" name="love" class="form-control" placeholder="Enter What You Love About Us"
              required>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">What You Hate About Us</label>
            <input type="text" id="hate" name="hate" class="form-control" placeholder="Enter What You Hate About Us"
              required>
          </div>

          <div class="mb-3">
            <label for="rate" class="form-label">Rate Us</label>
            <textarea id="rate" name="rate" class="form-control" placeholder="Rate Us" required></textarea>
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
    $love = htmlspecialchars($_POST['love']);
    $hate = htmlspecialchars($_POST['hate']);
    $rate = htmlspecialchars($_POST['rate']);

    try {
      $stmt = $conn->prepare("INSERT INTO review (name,  love,  hate, rate) VALUES (:name,   :love,  :hate, :rate)");
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':love', $love);
      $stmt->bindParam(':hate', $hate);
      $stmt->bindParam(':rate', $rate);
      $stmt->execute();

      exit;
    } catch (PDOException $e) {
      if ($e->getCode() == 23000) { // Duplicate entry error
        echo "<p class='error text-success ' >You Have successfully rated Us. You Can Go Back Home</p>";
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