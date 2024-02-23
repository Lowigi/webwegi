<?php 
session_start();

if(isset($_POST['uname']) && isset($_POST['pass'])){

    include "../db_conn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=".$uname;

    if(empty($uname)){
        $em = "User name is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else if(empty($pass)){
        $em = "Password is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else {

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $con->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $uname);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result && $result->num_rows == 1){
                $user = $result->fetch_assoc();

                $username =  $user['username'];
                $password =  $user['password'];
                $fname =  $user['fname'];
                $id =  $user['id'];

                if($username === $uname && password_verify($pass, $password)){
                    $_SESSION['id'] = $id;
                    $_SESSION['fname'] = $fname;

                    header("Location: ../home.php");
                    exit;
                } else {
                    $em = "Incorrect User name or password";
                    header("Location: ../login.php?error=$em&$data");
                    exit;
                }
            } else {
                $em = "Incorrect User name or password";
                header("Location: ../login.php?error=$em&$data");
                exit;
            }
        } else {
            echo "Error preparing statement";
        }
    }
} else {
    header("Location: ../login.php?error=error");
    exit;
}
