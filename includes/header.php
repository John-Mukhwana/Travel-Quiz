<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Travel Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for extra polish */
        .nav-shadow { box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); }
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #f97316; /* orange-400 */
            transition: width 0.3s ease-in-out;
        }
        .nav-link:hover::after { width: 100%; }
    </style>
</head>
<body class="bg-white text-teal-900 font-sans">

<!-- Navbar -->
<nav class="bg-teal-900 p-6 shadow-md nav-shadow fixed w-full top-0 z-20">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="index.php" class="text-3xl font-extrabold text-white tracking-tight hover:text-orange-400 transition duration-300">Travel Quiz</a>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden text-white focus:outline-none hover:text-orange-400 transition duration-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Nav Links -->
        <ul id="menu" class="hidden md:flex space-x-8 text-white text-lg font-medium">
            <li><a href="index.php" class="nav-link hover:text-orange-400 transition duration-300">Home</a></li>
            <li><a href="about.php" class="nav-link hover:text-orange-400 transition duration-300">About</a></li>
            <li><a href="user/dashboard.php" class="nav-link hover:text-orange-400 transition duration-300">Quizzes</a></li>
            <li><a href="gallery.php" class="nav-link hover:text-orange-400 transition duration-300">Gallery</a></li>
            <li><a href="contact.php" class="nav-link hover:text-orange-400 transition duration-300">Contact</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="user/logout.php" class="nav-link hover:text-orange-400 transition duration-300">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php" class="nav-link hover:text-orange-400 transition duration-300">Login</a></li>
                <li><a href="register.php" class="nav-link hover:text-orange-400 transition duration-300">Register</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-teal-900 text-white text-lg p-6 shadow-lg">
        <a href="index.php" class="block py-3 hover:text-orange-400 transition duration-300 border-b border-teal-800">Home</a>
        <a href="about.php" class="block py-3 hover:text-orange-400 transition duration-300 border-b border-teal-800">About</a>
        <a href="user/dashboard.php" class="block py-3 hover:text-orange-400 transition duration-300 border-b border-teal-800">Quizzes</a>
        <a href="gallery.php" class="block py-3 hover:text-orange-400 transition duration-300 border-b border-teal-800">Gallery</a>
        <a href="contact.php" class="block py-3 hover:text-orange-400 transition duration-300 border-b border-teal-800">Contact</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="user/logout.php" class="block py-3 hover:text-orange-400 transition duration-300">Logout</a>
        <?php else: ?>
            <a href="login.php" class="block py-3 hover:text-orange-400 transition duration-300 border-b border-teal-800">Login</a>
            <a href="register.php" class="block py-3 hover:text-orange-400 transition duration-300">Register</a>
        <?php endif; ?>
    </div>
</nav>

<!-- JavaScript for Mobile Menu -->
<script>
    document.getElementById("menu-btn").addEventListener("click", function () {
        let menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
    });
</script>

</body>
</html>