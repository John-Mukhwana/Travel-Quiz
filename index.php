<?php session_start(); include 'includes/header.php'; include 'includes/db.php'; ?>
<!-- Hero Section -->
<section class="bg-forest text-white py-20 bg-cover bg-center" style="background-image: url('/assets/images/african-savannah.jpg');">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">Discover Africa Through Quizzes</h1>
        <p class="text-xl md:text-2xl mb-8">Test your knowledge of African destinations, cultures, and wonders!</p>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <div class="space-x-4">
                <a href="/register.php" class="bg-terracotta text-white px-6 py-3 rounded-lg hover:bg-brown text-lg">Get Started</a>
                <a href="/login.php" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg hover:bg-savannah hover:text-forest text-lg">Login</a>
            </div>
        <?php else: ?>
            <a href="/user/dashboard.php" class="bg-terracotta text-white px-6 py-3 rounded-lg hover:bg-brown text-lg">Explore Quizzes</a>
        <?php endif; ?>
    </div>
</section>

<!-- Features Section -->
<section class="bg-savannah py-16">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-forest mb-12">Why Travel Quiz?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-forest mb-2">Interactive Quizzes</h3>
                <p class="text-forest">Challenge yourself with fun quizzes about African landmarks and cultures.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-forest mb-2">Stunning Gallery</h3>
                <p class="text-forest">Explore breathtaking images and videos of Africa’s beauty.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-forest mb-2">Learn & Enjoy</h3>
                <p class="text-forest">Gain knowledge while having fun—no pressure, just exploration!</p>
            </div>
        </div>
    </div>
</section>

<!-- Quiz Preview Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-forest text-center mb-12">Sneak Peek at Our Quizzes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            $stmt = $pdo->query("SELECT * FROM quizzes LIMIT 3");
            while ($quiz = $stmt->fetch()) {
                echo "<div class='bg-skyblue p-6 rounded-lg shadow-lg'>";
                echo "<h3 class='text-xl font-semibold text-forest mb-2'>{$quiz['title']}</h3>";
                echo "<p class='text-forest mb-4'>{$quiz['description']}</p>";
                echo "<a href='/user/dashboard.php' class='text-terracotta hover:underline'>Try It Now</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</section>

<!-- Call-to-Action Section -->
<section class="bg-terracotta text-white py-16 text-center">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold mb-4">Ready to Explore Africa?</h2>
        <p class="text-lg mb-8">Join thousands of travelers and test your knowledge today!</p>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <a href="/register.php" class="bg-savannah text-forest px-6 py-3 rounded-lg hover:bg-brown hover:text-white text-lg">Sign Up Now</a>
        <?php else: ?>
            <a href="/user/dashboard.php" class="bg-savannah text-forest px-6 py-3 rounded-lg hover:bg-brown hover:text-white text-lg">Go to Dashboard</a>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>