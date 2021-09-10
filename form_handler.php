<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'db_connect.php';

    if (
        isset($_POST['formName']) &&
        isset($_POST['formEmail']) &&
        isset($_POST['formContact']) &&
        isset($_POST['formDesc']) &&
        isset($_POST['formselect']) &&
        isset($_POST['form'])
    ) {

        $formName = $_POST['formName'];
        $formEmail = $_POST['formEmail'];
        $formContact = $_POST['formContact'];
        $formDesc = $_POST['formDesc'];
        $formselect = $_POST['formselect'];
        $form = $_POST['form'];

        if ($form == 'contactUs-form-submit') {
            $form = 'Contact Form Submittion';
        } elseif ($form == 'index-footer-form') {
            $form = 'Reach Out Form Submittion';
        } elseif ($form == 'form-j') {
            $form = 'Job Form Submittion';
        } elseif ($form == 'form-i') {
            $form = 'Internship Form Submittion';
        } elseif ($form == 'form-c') {
            $form = 'Collabration Form Submittion';
        } else {
            $form = 'Form Submittion';
        }

        $to = 'aadityajain.dev@gmail.com';
        $subject = $form;
        $message = "Name: " . $formName . "\n" . "email: " . $formEmail . "\n" . "Number: " . $formContact . "\n" . "Description: " . "\n" . $formDesc . "\n" . "Select: " . $formselect . "\n\n";
        $headers = "From: forms@linkussolutions.com";

        if (mail($to, $subject, $message, $headers)) {
            $myObj = new stdClass();
            $myObj->status = "pass";
            $myObj->message = "mail sent.";
            die(json_encode($myObj));
        } else {
            $myObj = new stdClass();
            $myObj->status = "fail";
            $myObj->message = "Something went wrong.";
            die(json_encode($myObj));
        }
    } elseif (isset($_POST['type'])) {

        if ($_POST['type'] == 'login') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "Select * from users where email_address='$email'";

            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
            // die($row['password']);

            $num = mysqli_num_rows($result);

            // This sql query is use to check if
            // the username is already present
            // or not in our Database
            if ($num != 0) {

                if (password_verify($password, $row['password'])) {
                    $myObj = new stdClass();
                    $myObj->status = "success";
                    $myObj->message = "Login Succesful";
                    die(json_encode($myObj));
                } else {
                    $myObj = new stdClass();
                    $myObj->status = "fail";
                    $myObj->message = "Wrong Username or password";
                    die(json_encode($myObj));
                }
            } else {
                $myObj = new stdClass();
                $myObj->status = "fail";
                $myObj->message = "Email is not registered.";
                die(json_encode($myObj));
            }
        } elseif ($_POST['type'] == 'register') {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['password'];
            $passwordC = $_POST['passwordC'];

            if ($password != $passwordC) {
                $myObj = new stdClass();
                $myObj->status = "fail";
                $myObj->message = "Password dont match";
                die(json_encode($myObj));
            }

            $strongPassword = preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $password);

            if (!$strongPassword) {
                $myObj = new stdClass();
                $myObj->status = "fail";
                $myObj->message = "Password is not strong";
                die(json_encode($myObj));
            }

            $sql = "Select * from users where email_address='$email'";

            $result = mysqli_query($conn, $sql);

            $num = mysqli_num_rows($result);

            // This sql query is use to check if
            // the username is already present
            // or not in our Database
            if ($num == 0) {

                $hash = password_hash(
                    $password,
                    PASSWORD_DEFAULT
                );

                $_timestamp = date("l jS \of F Y h:i:s A");

                // Password Hashing is used here.
                $sql = "INSERT INTO users (full_name, email_address , password, _timestamp)
                VALUES ('$name','$email','$hash','$_timestamp')";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $myObj = new stdClass();
                    $myObj->status = "success";
                    $myObj->message = "Registeration Succesful";
                    die(json_encode($myObj));
                } else {
                    $myObj = new stdClass();
                    $myObj->status = "fail";
                    $myObj->message = "Registeration fail";
                    die(json_encode($myObj));
                }
            } else {
                $myObj = new stdClass();
                $myObj->status = "fail";
                $myObj->message = "Email is already registered";
                die(json_encode($myObj));
            }
        } else {
            $myObj = new stdClass();
            $myObj->status = "fail";
            $myObj->message = "wrong type";
            die(json_encode($myObj));
        }
    } else {
        $myObj = new stdClass();
        $myObj->status = "fail";
        $myObj->message = "missing parameter";
        die(json_encode($myObj));
    }
} else {
    echo 'hello get';
}