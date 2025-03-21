<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /travel-quiz/login.php"); // Fixed path to login.php
    exit();
}
include '../includes/header.php';
include '../includes/db.php';
?>

<!-- Quizzes Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20 min-h-screen">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-extrabold text-teal-900 mb-12 text-center tracking-tight drop-shadow-md">Your Quizzes</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $stmt = $pdo->query("SELECT * FROM quizzes");
            if ($stmt->rowCount() === 0) {
                echo "<p class='text-lg text-gray-700 text-center col-span-full'>No quizzes available yet. Check back soon!</p>";
            } else {
                while ($quiz = $stmt->fetch()) {
                    echo "<div class='bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 border-t-4 border-teal-900'>";
                    echo "<h3 class='text-2xl font-semibold text-teal-900 mb-3'>{$quiz['title']}</h3>";
                    echo "<p class='text-gray-700 mb-6 leading-relaxed'>{$quiz['description']}</p>";
                    echo "<a href='/travel-quiz/user/take_quiz.php?id={$quiz['id']}' 
                             class='inline-block bg-orange-600 text-white px-5 py-2 rounded-full hover:bg-orange-700 transition duration-300 font-semibold shadow-md'>";
                    echo "Take Quiz";
                    echo "</a>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>