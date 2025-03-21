<?php session_start(); include 'includes/header.php'; include 'includes/db.php'; ?>

<!-- Hero Section -->
<section class="bg-teal-900 text-white py-24 bg-cover bg-center relative" style="background-image: url('/assets/images/african-savannah.jpg');">
    <div class="absolute inset-0 bg-black opacity-30"></div> <!-- Overlay for better text contrast -->
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight drop-shadow-md">Discover Africa Through Quizzes</h1>
        <p class="text-xl md:text-3xl mb-10 font-light italic text-gray-100">Unravel the wonders of African destinations and cultures!</p>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <div class="space-x-6">
                <a href="travel-quiz/register.php" class="bg-orange-600 text-white px-8 py-4 rounded-full hover:bg-orange-700 transition duration-300 text-lg font-semibold shadow-lg">Get Started</a>
                <a href="login.php" class="border-2 border-orange-600 text-orange-600 bg-white px-8 py-4 rounded-full hover:bg-orange-600 hover:text-white transition duration-300 text-lg font-semibold shadow-lg">Login</a>
            </div>
        <?php else: ?>
            <a href="/user/dashboard.php" class="bg-orange-600 text-white px-8 py-4 rounded-full hover:bg-orange-700 transition duration-300 text-lg font-semibold shadow-lg">Explore Quizzes</a>
        <?php endif; ?>
    </div>
</section>

<!-- Features Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-teal-900 mb-16 tracking-wide">Why Choose Travel Quiz?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <?php 
                $features = [
                    ["title" => "Interactive Quizzes", "desc" => "Engage with fun, challenging quizzes on African landmarks and cultures."],
                    ["title" => "Stunning Gallery", "desc" => "Immerse yourself in breathtaking visuals of Africa’s natural wonders."],
                    ["title" => "Learn & Enjoy", "desc" => "Expand your knowledge effortlessly while enjoying the journey."]
                ];
                
                foreach ($features as $feature) {
                    echo "
                    <div class='bg-white p-8 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition duration-300 border-t-4 border-orange-600'>
                        <h3 class='text-2xl font-semibold text-teal-900 mb-4'>{$feature['title']}</h3>
                        <p class='text-gray-700 leading-relaxed'>{$feature['desc']}</p>
                    </div>";
                }
            ?>
        </div>
    </div>
</section>

<!-- Quiz Preview Section -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-teal-900 text-center mb-16 tracking-wide">Sneak Peek at Our Quizzes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <?php
            $stmt = $pdo->query("SELECT * FROM quizzes LIMIT 3");
            while ($quiz = $stmt->fetch()) {
                echo "<div class='bg-white p-8 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition duration-300 border-t-4 border-teal-900'>";
                echo "<h3 class='text-2xl font-semibold text-teal-900 mb-3'>{$quiz['title']}</h3>";
                echo "<p class='text-gray-700 mb-6 leading-relaxed'>{$quiz['description']}</p>";
                echo "<a href='/user/dashboard.php' class='inline-block bg-orange-600 text-white px-5 py-2 rounded-full hover:bg-orange-700 transition duration-300 font-semibold'>Try It Now</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</section>

<!-- Call-to-Action Section -->
<section class="bg-teal-900 text-white py-20 text-center">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-6 tracking-wide">Ready to Explore Africa?</h2>
        <p class="text-xl mb-10 font-light text-gray-100">Join a vibrant community of travelers and test your knowledge today!</p>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <a href="/register.php" class="bg-orange-600 text-white px-8 py-4 rounded-full hover:bg-orange-700 transition duration-300 text-xl font-semibold shadow-lg">Sign Up Now</a>
        <?php else: ?>
            <a href="/user/dashboard.php" class="bg-orange-600 text-white px-8 py-4 rounded-full hover:bg-orange-700 transition duration-300 text-xl font-semibold shadow-lg">Go to Dashboard</a>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>