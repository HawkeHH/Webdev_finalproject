<?php // script for updating the contact us page
declare(strict_types=1);                                
require './includes/database-connection.php'; // database connection               
require './includes/db-functions.php';                          

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();  
    // Collect form data from form.
    $Phonenum = $_POST["Phonenum"];
    $Email = $_POST["Email"];
    $Hours = $_POST["Hours"];    

    try { // start the quary. 
        $query = "UPDATE contact_us 
                  SET phonenum = ?, 
                      email = ?, 
                      hours = ? 
                  WHERE contact_id = 1 "; // hard coded only need one entry for contact data. 
        $stmt = $pdo->prepare($query);

        $stmt->execute([ // assigning values
            $Phonenum, 
            $Email, 
            $Hours 
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