<?php session_start(); include 'includes/header.php'; include 'includes/db.php'; ?>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-forest mb-4">Travel Gallery</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <?php
        $stmt = $pdo->query("SELECT * FROM gallery WHERE type = 'image'");
        while ($item = $stmt->fetch()) {
            echo "<div class='bg-white p-4 rounded-lg shadow'>";
            echo "<img src='/assets/images/{$item['file_path']}' alt='{$item['title']}' class='w-full h-48 object-cover rounded'>";
            echo "<p class='mt-2 text-forest'>{$item['title']}</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>