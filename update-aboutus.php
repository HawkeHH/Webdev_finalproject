<?php // script for updating the about us page by updating the database values 
declare(strict_types=1);
require './includes/database-connection.php'; //db connection
require './includes/db-functions.php';

// retrieving and assigning form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $descTitle = $_POST['description1Title'] ?? '';
    $description = $_POST['description1'] ?? '';
    $descTitleTwo = $_POST['description2Title'] ?? '';
    $descriptionTwo = $_POST['description2'] ?? '';
    $aboutPhoto1 = $_FILES['about_photo_id1'] ?? null;  
    $aboutPhoto2 = $_FILES['about_photo_id2'] ?? null;
    try { // because photos are stored in a diffrent table, you fist must enter the new photos into that table
        // Handle file uploads
        $photo1Path = null; // initialize photo varibles. 
        $photo2Path = null;

        if ($aboutPhoto1 && $aboutPhoto1['error'] === UPLOAD_ERR_OK) { // begin processing the first photo
            $photo1Path = 'Images/' . basename($aboutPhoto1['name']); // assigning the proper directory path to access photo
            move_uploaded_file($aboutPhoto1['tmp_name'], $photo1Path); // moving the uploaded photo to the directory. 
            // Insert quary to enter the new photos information into the database 
            $stmtPhoto1 = $pdo->prepare(
                "INSERT INTO about_us_photos (p_name, imagedir) 
                VALUES (:pName, :imagedir) 
                ON DUPLICATE KEY UPDATE a_p_id = LAST_INSERT_ID(a_p_id)"); // fix for constant error. The database auto generates the ID but would throw a 
            $stmtPhoto1->execute([':pName' => $aboutPhoto1['name'], ':imagedir' => $photo1Path]); // fit without the DUPLICATE KEY clause.
            $photo1Id = $pdo->lastInsertId(); // assigns ID based on what the database assigns. 
        }
        if ($aboutPhoto2 && $aboutPhoto2['error'] === UPLOAD_ERR_OK) { // processing the second photo in the same way
            $photo2Path = 'Images/' . basename($aboutPhoto2['name']);
            move_uploaded_file($aboutPhoto2['tmp_name'], $photo2Path);

            $stmtPhoto2 = $pdo->prepare("INSERT INTO about_us_photos (p_name, imagedir) 
                                         VALUES (:pName, :imagedir) 
                                         ON DUPLICATE KEY UPDATE a_p_id = LAST_INSERT_ID(a_p_id)"); 
            $stmtPhoto2->execute([':pName' => $aboutPhoto2['name'], ':imagedir' => $photo2Path]); 
            $photo2Id = $pdo->lastInsertId();
        }
        // with the new photos entered now we run the update query
        $query = "UPDATE about_us 
                  SET desctitle = :descTitle, 
                      description = :description, 
                      desctitletwo = :descTitleTwo, 
                      descriptiontwo = :descriptionTwo";
        if (isset($photo1Id)) { // First checks to ensure entry was not null before concatenating addional quary strings.  
            $query .= ", about_photo_id = :photo1Id";
        }
        if (isset($photo2Id)) {
            $query .= ", about_photo_id_2 = :photo2Id";
        }
        $query .= " LIMIT 1"; // ensure only the one About us database entry is updated and maintained. 
        $stmt = $pdo->prepare($query);
        // Bind parameters
        $stmt->bindParam(':descTitle', $descTitle, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':descTitleTwo', $descTitleTwo, PDO::PARAM_STR);
        $stmt->bindParam(':descriptionTwo', $descriptionTwo, PDO::PARAM_STR);
        if (isset($photo1Id)) {
            $stmt->bindParam(':photo1Id', $photo1Id, PDO::PARAM_INT);
        }
        if (isset($photo2Id)) {
            $stmt->bindParam(':photo2Id', $photo2Id, PDO::PARAM_INT);
        }
        // Execute update
        $stmt->execute();
        header("Location: aboutUsPage.php");
        exit();
    } catch (PDOException $e) {
        error_log("About Us Update Error: " . $e->getMessage());
        die("An error occurred while updating the About Us section.");
    }
} else {
    header("Location: aboutUsPage.php");
    exit();
}