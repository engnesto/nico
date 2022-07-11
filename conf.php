<?php 

session_start(); 

include "confi.php";

if (isset($_POST['username']) && isset($_POST['pwd'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['pwd']);

       $sql = "SELECT * FROM logintbl WHERE Email='$uname' AND Password='$pass'";

        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $uname && $row['Password'] === $pass) {

                echo "Logged in!";

                $_SESSION['Email'] = $row['Email'];

                header("Location: home.php");

                exit();

            }else{

                echo 'You have not entered all necessary details. Please try again'; 
                include('index.html');
                exit();

            }

        }else{

            echo 'You have not entered all necessary details. Please try again'; 
            include('index.html');
            exit();

        }

    }