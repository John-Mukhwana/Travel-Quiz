<?php session_start(); include 'includes/header.php'; ?>

<!-- Contact Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20 min-h-screen flex items-center">
    <div class="container mx-auto px-6 max-w-lg">
        <h2 class="text-4xl md:text-5xl font-extrabold text-teal-900 mb-8 text-center tracking-tight drop-shadow-md">Contact Us</h2>
        <form action="#" method="POST" class="space-y-6 bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
            <div>
                <input type="text" name="name" placeholder="Your Name" 
                       class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition duration-300 text-teal-900 placeholder-gray-500"
                       required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Your Email" 
                       class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition duration-300 text-teal-900 placeholder-gray-500"
                       required>
            </div>
            <div>
                <textarea name="message" placeholder="Your Message" 
                          class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition duration-300 text-teal-900 placeholder-gray-500" 
                          rows="5" required></textarea>
            </div>
            <button type="submit" 
                    class="w-full bg-orange-600 text-white px-6 py-3 rounded-full hover:bg-orange-700 transition duration-300 text-lg font-semibold shadow-md hover:shadow-xl transform hover:-translate-y-1">
                Send Message
            </button>
        </form>
        <p class="mt-6 text-center text-gray-700">
            Need help? Reach out at <a href="mailto:support@travelquiz.com" class="text-orange-600 font-semibold hover:underline transition duration-300">support@travelquiz.com</a>
        </p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>