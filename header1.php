<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenga Kesho Community</title>
    <link rel="stylesheet" href="header1.css">
</head>
<body>

<header>
    <div class="logo">Jenga Kesho</div>
    <nav>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reach-out">Reach Out</a></li>
            <li><a href="#signup" class="signup-btn">Sign Up</a></li>
        </ul>
        <div class="hamburger" onclick="toggleMenu()">☰</div>
    </nav>
</header>

<script>
function toggleMenu() {
    const navLinks = document.querySelector(".nav-links");
    navLinks.classList.toggle("active");
}
</script>

</body>
</html>
