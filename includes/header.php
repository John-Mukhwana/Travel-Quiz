<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Travel Quiz</title>
    <link href="/css/tailwind.css" rel="stylesheet">
</head>
<body class="bg-savannah text-forest font-sans">
    <nav class="bg-terracotta p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/index.php" class="text-2xl font-bold text-white">Travel Quiz</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="/index.php" class="hover:text-skyblue">Home</a></li>
                <li><a href="/about.php" class="hover:text-skyblue">About</a></li>
                <li><a href="/user/dashboard.php" class="hover:text-skyblue">Quizzes</a></li>
                <li><a href="/gallery.php" class="hover:text-skyblue">Gallery</a></li>
                <li><a href="/contact.php" class="hover:text-skyblue">Contact</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="/user/logout.php" class="hover:text-skyblue">Logout</a></li>
                <?php else: ?>
                    <li><a href="/login.php" class="hover:text-skyblue">Login</a></li>
                    <li><a href="/register.php" class="hover:text-skyblue">Register</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>