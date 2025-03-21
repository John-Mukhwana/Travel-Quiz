<?php
session_start();
if (!isset($_SESSION['user_id'])) header("Location: /login.php");
include '../includes/header.php';
include '../includes/db.php';
$quiz_id = $_GET['id'] ?? null;
?>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-forest mb-4">Take Quiz</h2>
    <p>Quiz ID: <?php echo htmlspecialchars($quiz_id); ?></p>
    <!-- Add quiz-taking logic here later -->
</div>
<?php include '../includes/footer.php'; ?>