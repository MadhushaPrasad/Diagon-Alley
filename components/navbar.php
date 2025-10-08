<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active';
  } 
}
?>

<nav class="navbar">
    <div class="logo-container">
        <img src="../../assets/img/logo.svg" alt="Logo" class="logo">
    </div>

    <!-- Hamburger Menu (visible on mobile screens) -->
    <div class="hamburger" onclick="toggleNav()">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <ul class="nav-links">
        <li><a class="<?php active('home.php');?>" href="../student/home.php">Home</a></li>
        <li><a class="<?php active('book.php');?>" href="../student/book.php">Books</a></li>
        <li><a class="<?php active('feedback.php');?>" href="#">Feedback</a></li>
        <li><a class="<?php active('about.php');?>" href="#">About Us</a></li>
        <li><a class="<?php active('contact.php');?>" href="../student/contact.php">Contact Us</a></li>
    </ul>

    <div class="auth-buttons">
        <button class="sign-in">Sign In</button>
        <button class="register">Register</button>
    </div>
</nav>

<!-- Import the CSS file -->
<link rel="stylesheet" href="../../components/navbar.css">

<script>
function toggleNav() {
  const navLinks = document.querySelector('.nav-links');
  navLinks.classList.toggle('active');
}
</script>

