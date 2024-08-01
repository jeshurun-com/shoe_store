<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Tailwind CSS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shoe Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown"> <!-- Added dropdown class here -->
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <!-- Added dropdown-toggle class and dropdown ID here -->
            Link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> <!-- Added dropdown-menu class and aria-labelledby attribute here -->
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
           <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            -->
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container mx-auto mt-8">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php
    require_once 'database.php';
    // Fetch data from the database
    $sql = "SELECT * FROM ProductBag"; //  LIMIT 6 Assuming your table name is 'ProductBag'
    $result = $conn->query($sql);

    // Display the fetched data as cards
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
          <img class="w-full" src="<?php echo $row["url"]; ?>" alt="<?php echo $row["name"]; ?>">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2"><?php echo $row["name"]; ?></div>
            <p class="text-gray-700 text-base"><?php echo $row["description"]; ?></p>
          </div>
          <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"><?php echo $row["price"]; ?></span>
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-blue-300">Add to Cart</button>
          </div>
      </div>

    <?php
      }
    } else {
      echo "No products found.";
    }

    // Close the database connection
    $conn->close();
    ?>
  </div>
</div>

<script>
  const navbarToggler = document.querySelector('.navbar-toggler');
  const navbarCollapse = document.querySelector('.navbar-collapse');

  navbarToggler.addEventListener('click', () => {
    navbarCollapse.classList.toggle('show');

    if(navbarCollapse){
        navbarToggler.addEventListener('click', () =>{
            navbarCollapse.classList.remove('show');
        })
    }
  });
</script>

</body>
</html>
