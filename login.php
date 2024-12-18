<?php // script for logging in
declare(strict_types=1);
session_start();
require './includes/database-connection.php';
require './includes/db-functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // retrieving user data from form
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    try {
        // Query to retrieve the hashed password and user details based on the username
        $query = "SELECT c_id, password, isactive, permission FROM customers WHERE username = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);

        $result = $stmt->fetch();

        if ($result && password_verify($password, $result['password'])) { // Verify password
            // Update the `isactive` field
            $updateQuery = "UPDATE customers SET isactive = 1 WHERE c_id = ?";
            $updatestmt = $pdo->prepare($updateQuery);
            $updatestmt->execute([$result['c_id']]);

            // Assign session variables
            $_SESSION['c_id'] = $result['c_id'];
            $_SESSION['username'] = $username;
            $_SESSION['loggin_in'] = true;
            $_SESSION['permission'] = $result['permission']; // Used to see admin features

            header("Location: customer-page.php");
            exit();
        } else {
            $_SESSION["login_error"] = "Incorrect Username or Password";
            header("Location: login-page.php"); // Redirect back to the login page
            exit();
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
        
    