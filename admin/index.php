<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') header("Location: /login.php");
include '../includes/header.php';
include '../includes/db.php';
?>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-forest mb-4">Admin Dashboard</h2>
    <a href="/admin/manage_quiz.php" class="bg-terracotta text-white px-4 py-2 rounded hover:bg-forest">Manage Quizzes</a>
    <a href="/admin/manage_users.php" class="bg-terracotta text-white px-4 py-2 rounded hover:bg-forest ml-4">Manage Users</a>
</div>
<?php include '../includes/footer.php'; ?>