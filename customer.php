<?php // customer object as well as script for creating a customer in the database. 
declare(strict_types=1);                                
require './includes/database-connection.php';                
require './includes/db-functions.php';                          
class Customer {
    public int $customer_id;
    public string $firstName;
    public string $lastName;
    public string $address;
    public string $city;
    public string $zip;
    public string $state;
    public string $email;
    public string $username;
    public string $password;
    public bool $Isactive;

    public function __construct($customer_id, $firstName, $lastName, $address, $city, $zip, $state, $email, $username, $password, $Isactive) {
        $this->customer_id = $customer_id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->city = $city;
        $this->zip = $zip;
        $this->state = $state;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->Isactive = $Isactive;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // gathering information from form
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $address = $_POST["Address"];
    $city = $_POST["City"];
    $zip = $_POST["Zip"];
    $state = $_POST["State"];
    $email = $_POST["Email"];
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Hash the password with a secure algorithm
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    session_start();
    try { // insert into query.
        $query = "INSERT INTO customers (fname, lname, address_one, city, zip, state, email, username, password, isactive) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$firstName, $lastName, $address, $city, $zip, $state, $email, $username, $hashedPassword, '1']);
        header("Location: login-page.php"); // redirects user to login page. This is a workaround to fix the session not immediately storing user information.
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}