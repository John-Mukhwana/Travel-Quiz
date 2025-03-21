<?php session_start(); include 'includes/header.php'; ?>

<!-- About Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl md:text-6xl font-extrabold text-teal-900 mb-8 tracking-tight drop-shadow-md">About Us</h2>
        <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto leading-relaxed mb-12 font-light">
            Embark on a journey through African tourism with our interactive quizzes. From the vibrant 
            <span class="font-semibold text-orange-600 italic">Serengeti</span> plains to the majestic 
            <span class="font-semibold text-orange-600 italic">Pyramids of Egypt</span>, test your knowledge 
            and uncover the wonders of Africa’s rich cultures and landscapes.
        </p>

        <!-- Image Section -->
        <div class="mt-12 relative">
            <img src="assets/images/african-savannah.jpg" alt="African Tourism" 
                 class="w-full md:w-3/4 lg:w-2/3 mx-auto rounded-xl shadow-2xl transform hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-teal-900 opacity-10 rounded-xl"></div> <!-- Subtle overlay -->
        </div>

        <!-- Call to Action -->
        <div class="mt-12">
            <a href="user/dashboard.php" 
               class="inline-block px-8 py-4 bg-orange-600 text-white text-xl font-semibold rounded-full 
                      hover:bg-orange-700 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Start a Quiz Now
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>