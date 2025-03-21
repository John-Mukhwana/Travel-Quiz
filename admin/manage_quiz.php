<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') header("Location: /login.php");
include '../includes/header.php';
include '../includes/db.php';
?>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-forest mb-4">Manage Quizzes</h2>
    <p>Admin functionality to add/edit quizzes goes here.</p>
</div>
<?php include '../includes/footer.php'; ?>