<nav class="navbar">
    <div class="logo-container">
        <img src="../assets/img/logo.svg" alt="Logo" class="logo">
    </div>

    <!-- Hamburger Menu (visible on mobile screens) -->
    <div class="hamburger" onclick="toggleNav()">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Books</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>

    <div class="auth-buttons">
        <button class="sign-in">Sign In</button>
        <button class="register">Register</button>
    </div>
</nav>

<!-- Import the CSS file -->
<link rel="stylesheet" href="navbar.css">

<script>
function toggleNav() {
  const navLinks = document.querySelector('.nav-links');
  navLinks.classList.toggle('active');
}
</script>

