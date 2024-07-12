<?php

const namePattern = "/^[a-zA-Z\s]+$/";
const emailPattern = "/^[a-z]{2,}[0-9]*[\@]{1}[a-z]{5,}[\.]{1}[a-z]{2,}$/";

function nameValidation($name)
{
    if (empty($name)) {
        echo "Error ! Name not should be empty!";
        return 0;
    } else if (!preg_match(namePattern, $name)) {
        echo "Error ! Name must includes only characters!";
        return 0;
    } else if (strlen($name) < 2) {
        echo "Error ! Name must have at least 2 characters!";
        return 0;
    }

    return 1;

}

function emailValidation($email)
{
    if (empty($email)) {
        echo "Error! Email not should be empty!";
        return 0;
    } else if (!str_contains($email, '@')) {
        echo "Error ! Email must includes @ sign!";
        return 0;
    } else if (!str_contains($email, '.')) {
        echo "Error ! Email must includes . sign!";
        return 0;
    } else if (!preg_match(emailPattern, $email)) {
        echo "Error ! Email must have characters,digits only!";
        return 0;
    }

    return 1;
}

function descValidation($desc)
{
    if (empty($desc)) {
        echo "Error! Description not should be empty!";
        return 0;
    } else if (strlen($desc) < 20) {
        echo "Error! Description have at least 20 characters!";
        return 0;
    } else if (strlen($desc) > 150) {
        echo "Error! Description have less than 150 characters!";
        return 0;
    }

    return 1;

}
if (isset($_POST['name'])) {
    $name = trim($_POST['name']);
    nameValidation($name);
}

if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
    emailValidation($email);
}

if (isset($_POST['desc'])) {
    $desc = trim($_POST['desc']);
    descValidation($desc);
}

if (isset($_POST['submit'])) {
    try {
        $conn = new mysqli('localhost', 'root', '', 'ibm');
        if ($conn->connect_error) {
            echo "<b>Error! </b> Server Not Responded, try again later.";
            exit;
        }
    } catch (Exception $error) {
        echo "<b>Error! </b>" . $error->getMessage();
        exit;
    }

    $name = trim($_POST['name1']);
    $email = trim($_POST['email1']);
    $desc = trim($_POST['desc1']);

    if (nameValidation($name) && emailValidation($email) && descValidation($desc)) {
        $res = $conn->execute_query('INSERT INTO `contacts` VALUES (?,?,?,?)', [null, $name, $email, $desc]);
        if ($res) {
            echo "<b>Success!</b> Thanks to contact with us!";
        } else {
            echo "<b>Error!</b> Sorry Record not added!";
        }
    }
}
