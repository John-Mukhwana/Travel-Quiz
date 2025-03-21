<?php session_start(); include 'includes/header.php'; include 'includes/db.php'; ?>
<div class="container mx-auto p-6 max-w-md">
    <h2 class="text-2xl font-bold text-forest mb-4">Login</h2>
    <form action="/process.php" method="POST" class="space-y-4">
        <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded" required>
        <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded" required>
        <button type="submit" name="login" class="bg-terracotta text-white px-4 py-2 rounded hover:bg-forest">Login</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>