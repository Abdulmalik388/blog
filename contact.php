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
  <style>
    .footer {
      background-color: pink;
    }

    .logo {
      font-family: cursive;
      margin-right: 82px;
    }

    header {
      margin-right: 60px;
    }
    .body{
      background-color: wheat;
    }
    </style>
</head>

<body  class="body">
  <?php
  include("include/navbar.php");

  ?>
  <br><br><br>


  <center>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->


    <section id="contact">
      <h2>Contact Us</h2><br>
      <p>Reach out to us for inquiries or support:</p><br>
      <p>Email:abdulmaliklawal388@gmail.com </p><br>
      <p>Whatsapp:08081168026</p><br>
      <p>Phone:07026361685 </p><br>
      <p>Address: Suite A6 amori shopping complex, orelope bus stop egbeda</p><br>
      <a href="https://wa.me/2348081168026?text=Hello Abdul Blog ."
        target="_blank" style="
       display: inline-flex; 
       align-items: center; 
       background-color: #25D366; 
       color: white; 
       text-decoration: none; 
       font-size: 16px; 
       font-weight: bold; 
       padding: 10px 20px; 
       border-radius: 5px; 
       cursor: pointer; 
       transition: background-color 0.3s ease;">
        <span style="
        width: 20px; 
        height: 20px; 
        background-image: url('https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg'); 
        background-size: cover; 
        margin-right: 10px;">
        </span>
        Message Us on WhatsApp
      </a>


    </section><br><br><br><br>
  </center>
  <?php
  include("include/footer.php");
  ?>
</body>

</html>