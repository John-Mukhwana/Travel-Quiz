<?php
session_start();
if (!isset($_SESSION['user_id'])) header("Location: /login.php");
include '../includes/header.php';
include '../includes/db.php';
?>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-forest mb-4">Your Quizzes</h2>
    <?php
    $stmt = $pdo->query("SELECT * FROM quizzes");
    while ($quiz = $stmt->fetch()) {
        echo "<div class='bg-white p-4 rounded-lg shadow mb-4'>";
        echo "<h3 class='text-xl text-forest'>{$quiz['title']}</h3>";
        echo "<p>{$quiz['description']}</p>";
        echo "<a href='/user/take_quiz.php?id={$quiz['id']}' class='text-terracotta hover:underline'>Take Quiz</a>";
        echo "</div>";
    }
    ?>
</div>
<?php include '../includes/footer.php'; ?>