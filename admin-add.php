<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Add Shoe Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4 stroke-gray-100">Add Shoe Product</h1>
    <div class="relative">
        <!-- Logout Button -->
        <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-red-300">Logout</a>
    </div>
    <br>
    <form action="process.php" method="POST" class="max-w-md mx-auto">
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image URL:</label>
            <input type="text" id="image" name="image" placeholder="Enter image URL" class="bg-white rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter name" class="bg-white rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
            <input type="text" id="price" name="price" placeholder="Enter price" class="bg-white rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-blue-300">Add Product</button>
        </div>
        <br>
    </form>
</div>

<footer class="bg-gray-800 text-white py-6 absolute bottom-0 w-full">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo or Site Name -->
      <a href="#" class="text-lg font-bold md:ml-4 sm:ml-2">Shoe Store</a>
      
      <!-- Navigation Links -->
      <div class="space-x-4 md:space-x-8">
        <a href="index.php" class="hover:text-gray-300 md:mr-4 sm:mr-2">Home</a>
        <a href="shop.php" class="hover:text-gray-300 md:mr-3 sm:mr-4">Shop</a>
      </div>
    </div>
  </footer>

<script>
    // Get the reference to the span element
       var errorElement = document.getElementById("success_message");
         // Function to hide the Error element
         if(isShowed){
          document.getElementById('success_message').classList.remove('hidden');
         }
         function hideError(){
           errorElement.style.display = "none";
         }

         // Call the hideError function after 5 seconds
         setTimeout(hideError, 3000); // 5000 milliseconds = 5 seconds
         //Get Rid Of This Shit
         document.querySelector('form').addEventListener('submit', function() {
         document.getElementById('success_message').classList.remove('hidden');
        });
  </script>
</body>
</html>
