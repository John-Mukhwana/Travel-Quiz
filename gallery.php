<?php session_start(); include 'includes/header.php'; include 'includes/db.php'; ?>

<!-- Gallery Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20 min-h-screen">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-extrabold text-teal-900 mb-12 text-center tracking-tight drop-shadow-md">Travel Gallery</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <?php
            $stmt = $pdo->query("SELECT * FROM gallery WHERE type = 'image'");
            if ($stmt->rowCount() === 0) {
                echo "<p class='text-xl text-gray-700 text-center col-span-full'>No images in the gallery yet. Check back soon!</p>";
            } else {
                while ($item = $stmt->fetch()) {
                    echo "<div class='bg-white rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 overflow-hidden'>";
                    echo "<img src='/travel-quiz/assets/images/{$item['file_path']}' alt='{$item['title']}' 
                              class='w-full h-64 object-cover transform hover:scale-105 transition duration-500'>";
                    echo "<div class='p-6'>";
                    echo "<p class='text-lg font-semibold text-teal-900'>{$item['title']}</p>";
                    echo "</div>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        <div class="mt-12 text-center">
            <a href="#" class="inline-block bg-orange-600 text-white px-8 py-4 rounded-full hover:bg-orange-700 transition duration-300 text-lg font-semibold shadow-md hover:shadow-xl transform hover:-translate-y-1">
                Load More (Coming Soon)
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>