<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /travel-quiz/login.php"); // Fixed path to login.php
    exit();
}
include '../includes/header.php';
include '../includes/db.php';
$quiz_id = $_GET['id'] ?? null;

// Fetch quiz details (assuming a quizzes table with id, title, description)
$stmt = $pdo->prepare("SELECT * FROM quizzes WHERE id = ?");
$stmt->execute([$quiz_id]);
$quiz = $stmt->fetch();
?>

<!-- Quiz Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20 min-h-screen flex items-center">
    <div class="container mx-auto px-6 max-w-3xl">
        <h2 class="text-4xl md:text-5xl font-extrabold text-teal-900 mb-8 text-center tracking-tight drop-shadow-md">
            <?php echo $quiz ? htmlspecialchars($quiz['title']) : 'Take Quiz'; ?>
        </h2>
        
        <?php if ($quiz): ?>
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <p class="text-xl text-gray-700 mb-6 leading-relaxed">
                    <?php echo htmlspecialchars($quiz['description']); ?>
                </p>
                <p class="text-lg text-teal-900 font-semibold mb-8">
                    Quiz ID: <?php echo htmlspecialchars($quiz_id); ?>
                </p>

                <!-- Placeholder for Quiz-Taking Logic -->
                <div class="space-y-6">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <p class="text-gray-700">Question 1: What is the capital of Kenya?</p>
                        <div class="mt-4 space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="q1" class="form-radio text-orange-600 focus:ring-orange-600" disabled>
                                <span class="ml-2 text-gray-700">Nairobi</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="q1" class="form-radio text-orange-600 focus:ring-orange-600" disabled>
                                <span class="ml-2 text-gray-700">Lagos</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="q1" class="form-radio text-orange-600 focus:ring-orange-600" disabled>
                                <span class="ml-2 text-gray-700">Cairo</span>
                            </label>
                        </div>
                    </div>
                    <p class="text-gray-600 italic text-center">More questions coming soon...</p>
                </div>

                <!-- Submit Button -->
                <div class="mt-10 text-center">
                    <button class="bg-orange-600 text-white px-8 py-4 rounded-full hover:bg-orange-700 transition duration-300 text-xl font-semibold shadow-md hover:shadow-xl transform hover:-translate-y-1">
                        Submit Quiz (Coming Soon)
                    </button>
                </div>
            </div>
        <?php else: ?>
            <p class="text-xl text-gray-700 text-center">Quiz not found. Please select a valid quiz from the dashboard.</p>
            <div class="mt-6 text-center">
                <a href="/travel-quiz/user/dashboard.php" 
                   class="inline-block bg-orange-600 text-white px-6 py-3 rounded-full hover:bg-orange-700 transition duration-300 text-lg font-semibold shadow-md hover:shadow-xl transform hover:-translate-y-1">
                    Back to Dashboard
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include '../includes/footer.php'; ?>