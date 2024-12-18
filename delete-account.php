<?php // script for deleting account. 
declare(strict_types=1);
session_start();

require './includes/database-connection.php';
require './includes/db-functions.php';

if (isset($_SESSION['c_id'])) { 
    try {
        $c_id = $_SESSION['c_id']; // assigning the current user id held in the session to varible to be pasted into query
        // delete the user account 
        $query = "DELETE FROM `customers` WHERE `c_id` = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$c_id]);


        $_SESSION = array(); // creating and ending the session post delete. 

        // Destroy the session
        session_destroy();

        // Redirect to home page
        header("Location: index.php");
        exit();

    } catch (PDOException $e) {
        // Log the error
        error_log("Logout Error:". $e->getMessage());
        die("An error occurred during logout.");
    }
} else {
    // If user is not logged in, redirect to login page
    header("Location: index.php");
    exit();
}
