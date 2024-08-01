<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-9mMzX4lWnu0zEF2spbikrnH40N2QTdTW57+OrJE4+eKsDaP0FxjPLF4xFbCc4xVr" crossorigin="anonymous">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto py-4 px-6 flex justify-between items-center">
            <a href="#" class="text-xl font-semibold text-gray-800 text-stroke-gray">Shoe Store</a>
            <ul class="flex space-x-4 items-center">
                <li><a href="#hero" class="text-gray-600 hover:text-gray-800 smooth-scroll">Home</a></li>
                <li><a href="#shop" class="text-gray-600 hover:text-gray-800 smooth-scroll">Shop</a></li>
                <li><a href="#contact" class="text-gray-600 hover:text-gray-800 smooth-scroll">Contact</a></li>
                <li><a href="login.php" class="text-gray-600 hover:text-gray-800">Login</a></li>
            </ul>
        </div>
    </nav>


  <!-- Hero Section -->
  <section class="bg-gray-800 text-white py-20" id="hero">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center px-4">
      <div class="lg:w-1/2 text-center lg:text-left">
        <h1 class="text-4xl font-bold mb-4">Step Up Your Style</h1>
        <p class="mb-6">Discover our latest collection of stylish and comfortable shoes.</p>
        <a href="shop.php" class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-full hover:bg-gray-200 transition duration-300">Shop Now</a>
      </div>
      <div class="lg:w-1/2 mt-10 lg:mt-0">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff" alt="Shoes" class="w-full rounded-lg shadow-lg">
      </div>
    </div>
  </section>

  <!-- Product Section -->
  <section class="bg-white py-20" id="shop">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-semibold text-gray-800 mb-8">Featured Products</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Product Card -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
          <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product" class="w-full h-40 object-cover mb-4 rounded-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Stylish Sneakers</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ante eu purus sagittis sagittis.</p>
          <a href="shop.php" class="block text-center mt-4 bg-gray-800 text-white font-semibold py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Buy Now</a>
        </div>
        <!-- Repeat for other products -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
          <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?q=80&w=1412&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product" class="w-full h-40 object-cover mb-4 rounded-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Casual Loafers</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ante eu purus sagittis sagittis.</p>
          <a href="shop.php" class="block text-center mt-4 bg-gray-800 text-white font-semibold py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Buy Now</a>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
          <img src="https://images.unsplash.com/photo-1515347619252-60a4bf4fff4f?q=80&w=1485&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product" class="w-full h-40 object-cover mb-4 rounded-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Stylish Sneakers</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ante eu purus sagittis sagittis.</p>
          <a href="shop.php" class="block text-center mt-4 bg-gray-800 text-white font-semibold py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Buy Now</a>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
          <img src="https://images.unsplash.com/photo-1531310197839-ccf54634509e?q=80&w=1530&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product" class="w-full h-40 object-cover mb-4 rounded-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Stylish Sneakers</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ante eu purus sagittis sagittis.</p>
          <a href="shop.php" class="block text-center mt-4 bg-gray-800 text-white font-semibold py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Buy Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="bg-gray-800 text-white py-20" id="contact">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center px-4">
      <div class="lg:w-1/2 text-center lg:text-left">
        <h2 class="text-3xl font-semibold mb-4">Contact Us</h2>
        <p class="mb-6">Have questions or inquiries? Feel free to reach out to us.</p>
        <!-- Contact Form -->
        <form action="contact_form.php" method="POST" class="max-w-md mx-auto">
          <div class="mb-4">
            <input type="text" name="name" placeholder="Your Name" class="bg-gray-200 text-gray-900 rounded-lg px-4 py-2 w-full focus:outline-none focus:bg-white">
          </div>
          <div class="mb-4">
            <input type="email" name="email" placeholder="Your Email" class="bg-gray-200 text-gray-900 rounded-lg px-4 py-2 w-full focus:outline-none focus:bg-white">
          </div>
          <div class="mb-4">
            <textarea name="message" placeholder="Your Message" rows="4" class="bg-gray-200 text-gray-900 rounded-lg px-4 py-2 w-full focus:outline-none focus:bg-white"></textarea>
          </div>
          <div>
            <button type="submit" class="bg-gray-900 text-white font-semibold py-2 px-6 rounded hover:bg-gray-700 transition duration-300">Send Message</button>
          </div>
        </form>
        <!-- End of Contact Form -->
      </div>
    </div>
  </section>

   <!-- Footer -->
   <footer class="bg-gray-900 text-white py-10">
    <div class="container mx-auto flex items-center justify-between px-4">
      <p>&copy; 2024 Shoe Store. All rights reserved.</p>
      <ul class="flex space-x-4">
        <li><a href="#" class="hover:text-gray-400">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-gray-400">Terms of Service</a></li>
      </ul>
    </div>
  </footer>

  <!-- JavaScript for smooth scrolling -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const smoothScrollLinks = document.querySelectorAll('.smooth-scroll');

        for (let link of smoothScrollLinks) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const targetId = this.getAttribute('href');
                const targetPosition = document.querySelector(targetId).offsetTop;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>

</body>
</html>
