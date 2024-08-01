<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Log in to your account
      </h2>
    </div>
    <form class="mt-8 space-y-6" action="login.php" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="username" class="sr-only">Username</label>
          <input id="username" name="username" type="text" autocomplete="username" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Username">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 block text-sm text-gray-900">
            Remember me
          </label>
        </div>

        <div class="text-sm">
          <a href="" class="font-medium text-indigo-600 hover:text-indigo-500" onclick="adviceAlert()">
            Forgot your password?
          </a>
        </div>
      </div>

      <div>
        <button type="submit" name="login" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
              <path fill-rule="evenodd" d="M4 8V6a6 6 0 1112 0v2h.697A2.5 2.5 0 0117 10.5V14a2 2 0 01-2 2H5a2 2 0 01-2-2v-3.5A2.5 2.5 0 014.303 8H4zm6-5a1 1 0 00-1 1v2h2V4a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </span>
          Sign in
        </button>
        <br>

<?php
// Check if form is submitted
require_once 'database.php'; // Include the file with database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (you should use secure validation methods)
    // For example, using prepared statements to prevent SQL injection
    // Assuming you have a database connection (already included)

    // Query to check if username and password exist in the database
    $query = "SELECT * FROM LoginInfo WHERE username='$username' AND password='$password'";
    $result = $conn->query($query); // Use $conn from database.php

    // Check if the query executed successfully
    if (!$result) {
        die("Query failed: " . $conn->error); // Display error if query fails
    }

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        // Redirect to home page on successful login
        header("Location: admin-add.php");
        exit();
    } else {
        // Display error message if login fails
        echo '<div class="text-red-500 text-center mb-4" id="ErrorMessage">Invalid username or password. Please try again.</div>';
    }
}
?>
      </div>
    </form>
    <div class="text-center">
      <a href="index.php" class="text-indigo-600 hover:text-indigo-500">Go to Home Page</a>
    </div>
  </div>
</div>
  <script>
    // Get the reference to the span element
      var errorElement = document.getElementById("ErrorMessage");

        // Function to hide the Error element
        function hideError(){
          errorElement.style.display = "none";
        }

        // Call the hideError function after 5 seconds
        setTimeout(hideError, 5000); // 5000 milliseconds = 5 seconds

        function adviceAlert(){
          alert("Relax and try to remember your password!");
        }
  </script>
</body>
</html>
