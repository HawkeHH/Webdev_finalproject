<?php // logout script
declare(strict_types=1);
session_start();

require './includes/database-connection.php';
require './includes/db-functions.php';

if (isset($_SESSION['c_id'])) { // query to change isactive in database to 0. Can be used to show active user count. 
    try {
        $c_id = $_SESSION['c_id'];
        // Update the isactive 
        $query = "UPDATE customers SET isactive = 0 WHERE c_id = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$c_id]);


        $_SESSION = array(); // creating session object

        // Destroy the session
        session_destroy();

        // Redirect to login page
        header("Location: login-page.php");
        exit();

    } catch (PDOException $e) {
        // Log the error
        error_log("Logout Error:". $e->getMessage());
        die("An error occurred during logout.");
    }
} else {
    // If user is not logged in, redirect to login page
    header("Location: login-page.php");
    exit();
}
