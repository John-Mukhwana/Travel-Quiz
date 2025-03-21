<?php session_start(); include 'includes/header.php'; ?>
<div class="container mx-auto p-6 max-w-md">
    <h2 class="text-2xl font-bold text-forest mb-4">Contact Us</h2>
    <form action="#" method="POST" class="space-y-4">
        <input type="text" name="name" placeholder="Name" class="w-full p-2 border rounded" required>
        <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded" required>
        <textarea name="message" placeholder="Message" class="w-full p-2 border rounded" rows="4" required></textarea>
        <button type="submit" class="bg-terracotta text-white px-4 py-2 rounded hover:bg-forest">Send</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>