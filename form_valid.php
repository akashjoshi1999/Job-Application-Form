<?php
    $name = $email = "";
    $err = ""; 
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $err = "Name is required";
            header("location: index.php ?x=$err");
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $err = "Only letters and white space allowed";
                header("location: index.php ?x=$err");
            }
        }
    
        if (empty($_POST["mobile"])) {
            $err = "Mobile number is required";
            header("location: index.php ?x=$err");
        } else {
            $mobile = $_POST['mobile'];
            if(preg_match("/^[0-9]{10}+$/",$mobile) && strlen($mobile) == 10){
                $mobile = $_POST['mobile'];
            } else {
                $err = "Invalid mobile number";
                header("location: index.php ?x=$err");
            }
        }
        

        if (empty($_POST["email"])) {
            $err = "Email is required";
            header("location: index.php ?x=$err");
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err = "Invalid email format";
                header("location: index.php ?x=$err");
            }
        }

        if (empty($_POST["age"])) {
            $err = "Age is required";
            header("location: index.php ?x=$err");
        } else {
            $age = $_POST['age'];
            if(preg_match("/^[0-9]+$/",$age)){
                $age = $_POST['age'];
            } else {
                $err = "only numerics are allowed";
                header("location: index.php ?x=$err");
            }
        }

        if (empty($_POST["exe"])) {
            $rr = "Experience is required";
            header("location: index.php ?x=$err");
        } else {
            $exe = $_POST['exe'];
            if(preg_match("/^[0-9]+$/",$exe)){
                $exe = $_POST['exe'];
            } else {
                $err = "only numerics are allowed";
                header("location: index.php ?x=$err");
            }
        }

        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            if ($_FILES["file"]["size"] > 2000000) {
                $err = "Sorry, your file is too large.";
                header("location: index.php ?x=$err");
            } else {
                if($imageFileType != "pdf" && $imageFileType != "word") {
                    $err = "Sorry, only PDF and WORD files are allowed.";
                    header("location: index.php ?x=$err");
                } else {
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                        
                    } else {
                        $err = "Sorry, there was an error uploading your file.";
                        header("location: index.php ?x=$err");
                    }             
                }
            }
        } else {
            $err = "File is not an image.";
            header("location: index.php ?x=$err");
        }
    
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>