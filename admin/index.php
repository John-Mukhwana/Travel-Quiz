<?php
session_start();
// Restrict access to admins only
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: /travel-quiz/login.php");
    exit();
}
include '../includes/header.php'; // Assuming admin/ is a subdirectory
include '../includes/db.php';
?>

<!-- Admin Dashboard Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20 min-h-screen">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-extrabold text-teal-900 mb-12 text-center tracking-tight drop-shadow-md">
            Admin Dashboard
        </h2>

        <!-- Welcome Message -->
        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 mb-12">
            <h3 class="text-2xl font-semibold text-teal-900 mb-4">Welcome, Admin!</h3>
            <p class="text-lg text-gray-700 leading-relaxed">
                Manage quizzes, gallery items, and users from this dashboard. Use the sections below to get started.
            </p>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Manage Quizzes -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 border-t-4 border-teal-900">
                <h3 class="text-2xl font-semibold text-teal-900 mb-3">Manage Quizzes</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Add, edit, or delete quizzes for users to enjoy.
                </p>
                <a href="/travel-quiz/admin/manage_quizzes.php" 
                   class="inline-block bg-orange-600 text-white px-5 py-2 rounded-full hover:bg-orange-700 transition duration-300 font-semibold shadow-md">
                    Go to Quizzes
                </a>
            </div>

            <!-- Manage Gallery -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 border-t-4 border-teal-900">
                <h3 class="text-2xl font-semibold text-teal-900 mb-3">Manage Gallery</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Upload or remove images to showcase African beauty.
                </p>
                <a href="/travel-quiz/admin/manage_gallery.php" 
                   class="inline-block bg-orange-600 text-white px-5 py-2 rounded-full hover:bg-orange-700 transition duration-300 font-semibold shadow-md">
                    Go to Gallery
                </a>
            </div>

            <!-- Manage Users -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 border-t-4 border-teal-900">
                <h3 class="text-2xl font-semibold text-teal-900 mb-3">Manage Users</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    View, edit, or delete user accounts.
                </p>
                <a href="/travel-quiz/admin/manage_users.php" 
                   class="inline-block bg-orange-600 text-white px-5 py-2 rounded-full hover:bg-orange-700 transition duration-300 font-semibold shadow-md">
                    Go to Users
                </a>
            </div>
        </div>

        <!-- Quick Stats (Placeholder) -->
        <div class="mt-12 bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
            <h3 class="text-2xl font-semibold text-teal-900 mb-6">Quick Stats</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                <div>
                    <p class="text-3xl font-bold text-orange-600"><?php echo $pdo->query("SELECT COUNT(*) FROM quizzes")->fetchColumn(); ?></p>
                    <p class="text-gray-700">Total Quizzes</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-orange-600"><?php echo $pdo->query("SELECT COUNT(*) FROM gallery")->fetchColumn(); ?></p>
                    <p class="text-gray-700">Gallery Items</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-orange-600"><?php echo $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn(); ?></p>
                    <p class="text-gray-700">Registered Users</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>