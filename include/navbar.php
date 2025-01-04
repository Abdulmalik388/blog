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
    .brand {
      font-size: 50px;
      color: rgb(204, 94, 94);
      font-family: cursive;

    }

    .home {
      color: rgb(204, 94, 94);
    }

    .button {
      border: 2px solid rgb(216, 98, 98);
      background-color: rgb(216, 98, 98);
      color: white;
    }

    .button:hover {
      color: black;
      background-color: white;
    }

    
    body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  
  padding: 10px 20px;
}

.navbar .brand {
  font-size: 1.5em;
  font-weight: bold;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 15px;
  margin: 0;
  padding: 0;
}

.nav-links li a {

  text-decoration: none;
  padding: 10px 15px;
  transition: background 0.3s;
}

.nav-links li a:hover {
  background: #555;
  border-radius: 5px;
}

/* Hide the menu icon by default */
.menu-icon {
  display: none;
  cursor: pointer;
  font-size: 1.5em;
}

/* Media Query for Small Screens */
@media (max-width: 768px) {
  .nav-links {
    display: none; /* Hide links */
    flex-direction: column;
    background-color: white;
    position: absolute;
    top: 50px;
    left: 0;
    width: 100%;
    padding: 10px 0;
    z-index: 1000;
    margi
  }

  .nav-links.show {
    display: flex; /* Show links when toggled */
  }

  .menu-icon {
    display: block; /* Show menu icon */
  }
}
.nav-links{
  margin-right: 300px;
}

  </style>

</head>

<body class="body container">

<nav class="navbar">
    <a href="index.php"><div class="brand">Abdul Blog</div></a>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <ul class="nav-links">
      <li class=" active"><a href="index.php">HOME</a></li>
      <li><a href="Admin_login.php">ADMIN_LOGIN</a></li>
      <li><a href="reviews.php">REVIEWS</a></li>
      <li><a href="video.php">VIDEOS</a></li>
      <li><a href="contact.php">CONTACTUS</a></li>
      <p><a href="lettaalk.php"><button class=" btn-sm button"> LET'S TALK</button></a></p>
    </ul>
    </nav>

  <script>
    function toggleMenu() {
      const navLinks = document.querySelector(".nav-links");
      navLinks.classList.toggle("show");
    }
  </script>
        
      



</body>

</html>