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
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    .post {
      border: 1px solid #ddd;
      padding: 15px;
      margin-bottom: 20px;
    }

    .post img {
      max-width: 100%;
      height: auto;
    }

    .strong {
      font-size: 35px;
      color: rgb(216, 98, 98);
      ;
    }

    .img {
      width: 180px;
      border-radius: 80px;
    }

    hr {
      width: 100%;
    }

    .miami_img {
      width: 180px;
      height: 170px;
      border-radius: 80px;
    }

    .bellanaija-img {
      width: 100%;
      height: 500px;
    }

    .head {
      color: rgb(216, 98, 98);
      ;
    }

    .anu {
      height: 400px;
      width: 90%;
    }

    .love {
      height: 300px;
      width: 90%;
    }

    .div_container {
      background-color: pink;
    }

  </style>

</head>



<?php
include("include/navbar.php");
?><br><br>
<?php
// Include database connection
require_once 'db.php';

// Fetch posts from the database
try {
  $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
  $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Error fetching posts: " . $e->getMessage());
}
?>




<h1 class="text-center head">Welcome to My Blog</h1><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <strong class="strong">TRENDING</strong><br><br>
      <a href=" details/messi.php"><img src="images/messi.png" class="miami_img" alt="Post Image"></a>
      <a href="details/messi.php" target="_blank" class="text-center">
        Watch How leonel Messi scored <br> hatrick in inter-miami against <br> new-england
      </a><br><br>
      <a href="details/valladollid.php"><img src="images/barca.avif" class="miami_img " alt=""></a>
      <a href="details/valladollid.php" target="_blank" class="text-center">


        Barcelona vs sevila 5-1 <br> Highlights & All Goals 2024 🔥...
      </a><br><br>
      <a href="details/barca.php"><img src="images/third.webp" class="miami_img" alt=""></a>
      <a href="details/barca.php" target="_blank" class="text-center">
        Watch how Barcelona defeated <br> Real-valladolid 7-0 🔥...
      </a>
    </div>
    <div class="col-sm-5">
      <a href="post_detail.php#anu"><img src="images/anu.jpg" alt="" class="anu"></a>
      <a href="post_detail.php#anu"><strong>
          #FeelLikeAChildAgain: Anu Odubanjo Misses <br> Celebrating Christmas With Her Late Dad</strong></a><br><br>
      <a href="details/love.php"><img src="images/love.png" class="love" alt=""></a>
      <a href="details/love.php">Jimin - Love Is Gone [FMV]</a>
    </div>
    <div class="col-sm-4">
      <center>
        <strong class="strong ">LATEST</strong>
      </center>
      <hr>
      <a href="details/zino.php"><strong>Timmy, Remzel & Zinoleesky (2024) "Traffic" full Song</strong></a>
      <hr>
      <a href="details/Latest.php"><strong>
          LATEST NIGERIA MUSIC 2024-2025|
          Wizkid - Piece of My Heart (Official Video) ft. Brent Faiyaz</strong></a>
      <hr>
      <a href="details/music.php"><strong>AFROBEAT MIX 2024 NAIJA 💥 The Best and Latest Afrobeat Jams of 2024 💥 Ayra
          Starr, Burna Boy, Rema</strong></a>
      <hr>
      <a href="details/fuji.php"><strong>Listen to Zinoleesky Latest Song, with full video "Fuji Garbage"</strong></a>
      <hr>
      <a href="details/lamine.php"><strong>
          Watch The Full Video Of Lamine Yamal MASTERCLASS Against Bayern Munich </strong></a>
      <hr>
      
      <a href="details/gaza.php"><strong>Israeli Air Strikes Kill 16 Palestinians in Gaza | Dawn News
          English</strong></a>
<hr>
<a href="details/verydarkman.php"><strong>Watch the full video of how VeryDarkMan finally Explain What happened to the NGO Money</strong></a>
    </div>
  </div>



</div>
<br><br><br><br><br><br>
<div class="container div_container p-5">
  <div class="row">
    <div class="col-sm-4  ">
      <h3 class="text-center text-white">SWEET SPOT</h3>
      <div class="card bg-light p-4">
        <a href="details/jennifer.php"><img src="images/jennifer.jpeg" class="card-head" alt=""><br>
          <strong class="card-body">Funke Akindele’s Speech as UNAIDS Ambassador is Equal Parts Humour & Advocacy | We
            Love it!.</strong></a>
      </div>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center text-white">LATEST</h3>
      <div class="card bg-light p-4">
        <a href="details/davido.php"><img style="height:240px" src="images/davido.png" class="card-head" alt=""><br>
          <strong class="card-body">Davido - Funds (Official Video) ft. ODUMODUBLVCK, Chike.
          </strong></a>
      </div>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center text-white">NOLLYWOOD</h3>
      <div class="card bg-light p-4">
        <a href="details/rema.php"><img style="height:240px" src="images/rema.png" class="card-head" alt=""><br>
          <strong class="card-body">Bnxn, Rema - Fi Kan We Kan (Official Video).
          </strong></a>
      </div>
    </div>
  </div>
</div><br><br><br><br><br><br><br>
]
<?php
include("include/footer.php");
?>
</body>

</html>