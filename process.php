<?php
session_start();
include 'includes/db.php';
include 'includes/header.php'; // Added for consistent layout

// Handle Registration
if (isset($_POST['register'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    try {
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->execute([$email, $password]);
        header("Location: /travel-quiz/login.php"); // Fixed path
        exit;
    } catch (PDOException $e) {
        $error = "Registration failed: " . $e->getMessage();
    }
}

// Handle Login
if (isset($_POST['login'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'] ?? 'user'; // Default to 'user' if role is unset
        $redirect = $user['role'] === 'admin' ? '/travel-quiz/admin/index.php' : '/travel-quiz/user/dashboard.php';
        header("Location: $redirect"); // Fixed paths
        exit;
    } else {
        $error = "Invalid email or password. Please try again.";
    }
}
?>

<!-- Response Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20 min-h-screen flex items-center">
    <div class="container mx-auto px-6 max-w-lg">
        <?php if (isset($error)): ?>
            <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                <h2 class="text-3xl font-extrabold text-teal-900 mb-6 tracking-tight drop-shadow-md">Oops!</h2>
                <p class="text-lg text-gray-700 mb-8"><?php echo htmlspecialchars($error); ?></p>
                <a href="/travel-quiz/login.php" 
                   class="inline-block bg-orange-600 text-white px-6 py-3 rounded-full hover:bg-orange-700 transition duration-300 text-lg font-semibold shadow-md hover:shadow-xl transform hover:-translate-y-1">
                    Back to Login
                </a>
            </div>
        <?php else: ?>
            <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                <h2 class="text-3xl font-extrabold text-teal-900 mb-6 tracking-tight drop-shadow-md">Processing...</h2>
                <p class="text-lg text-gray-700">Please wait while we handle your request.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; // Added for consistent layout ?>