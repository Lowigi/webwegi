<?php 

if(isset($_POST['fname']) && 
   isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&uname=".$uname;
    
    if (empty($fname) || empty($uname) || empty($pass)) {
        $em = "All fields are required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else {
        // hashing the password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        // Check if the username already exists
        $checkQuery = "SELECT username FROM users WHERE username = ?";
        $checkStmt = $con->prepare($checkQuery);
        $checkStmt->bind_param("s", $uname);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $em = "Username already exists";
            header("Location: ../index.php?error=$em&$data");
            exit;
        }

        $insertQuery = "INSERT INTO users(fname, username, password) 
                        VALUES(?,?,?)";

        // Check if the connection is successful
        if ($con) {
            $stmt = $con->prepare($insertQuery);

            // Check if the statement is prepared successfully
            if ($stmt) {
                $stmt->execute([$fname, $uname, $pass]);
                header("Location: ../index.php?success=Your account has been created successfully");
                exit;
            } else {
                echo "Error preparing statement";
            }
        } else {
            echo "Error connecting to the database";
        }
    }
} else {
    header("Location: ../index.php?error=error");
    exit;
}
