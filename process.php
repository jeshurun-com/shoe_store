<?php

require_once 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $url = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "INSERT INTO ProductBag (url, name, price) VALUES ('$url', '$name', '$price')";

    if($conn->query($sql) === TRUE){
        // Close the database connection
        $conn->close();
        // Redirect to another page after successful form submission
        // Stop further execution of the script
        // Assuming the form submission is successful, set a success message in session
        header("Location: admin-add.php");
        exit();
    }
    else {
        echo "<div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative' role='alert'>
                <strong class='font-bold'>Error!</strong>
                <span class='block sm:inline'>Failed to create new record</span>
              </div>";
    }
}
?>
