<?php
declare(strict_types=1);                                
require './includes/database-connection.php';                
require './includes/db-functions.php';                          

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    // Ensure the user is logged in and has a c_id in the session
    if (!isset($_SESSION['loggin_in']) || $_SESSION['loggin_in'] !== true) {
        header("Location: customerlogin.php");
        exit();
    }
    
    if (!isset($_SESSION['c_id'])) {
        die("Error: Customer ID not found in session.");
    }

    $c_id = $_SESSION['c_id']; // assigning the current session id to the varible for use in the query

    // Collect form data 
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $address = $_POST["address_one"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $state = $_POST["state"];
    $email = $_POST["email"];
    $phoneNum = $_POST["phonenum"]; 

    try {
        // update query
        $query = "UPDATE customers 
                  SET fname = ?, 
                      lname = ?, 
                      address_one = ?, 
                      city = ?, 
                      zip = ?, 
                      state = ?, 
                      email = ?, 
                      phonenum = ? 
                  WHERE c_id = ?";
        $stmt = $pdo->prepare($query);

       // assinging posted values
        $stmt->execute([
            $firstName, 
            $lastName, 
            $address, 
            $city, 
            $zip, 
            $state, 
            $email, 
            $phoneNum, 
            $c_id // passed current c_id to update current user
        ]);

        
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}