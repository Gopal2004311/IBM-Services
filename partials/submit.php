<?php

const namePattern = "/^[a-zA-Z\s]+$/";
const emailPattern = "/^[A-Za-z]{2,}[0-9]*[\@]{1}[a-z]{2,}+[\.]{1}[a-z]{2,}$/";

function nameValidation($name)
{
    if (empty($name)) {
        echo "<b>Error!</b> Name not should be empty!";
        return 0;
    } else if (!preg_match(namePattern, $name)) {
        echo "<b>Error!</b> Name must includes only characters!";
        return 0;
    } else if (strlen($name) < 2) {
        echo "<b>Error!</b> Name must have at least 2 characters!";
        return 0;
    }
    return 1;
}

function emailValidation($email)
{
    if (empty($email)) {
        echo "<b>Error!</b> Email not should be empty!";
        return 0;
    }
    if (!str_contains($email, '@')) {
        echo "<b>Error!</b> Email must includes @ sign!";
        return 0;
    }
    if (substr($email, strpos($email, '@')) == '@') {
        echo "<b>Error!</b> Email must include some character after @ sign!";
        return 0;
    }
    if (substr($email, strpos($email, '@')) != '@') {
        $string = substr($email, strpos($email, '@'));
        if (strpos($string, '.') == 1 || strpos($string, '.') == 2) {
            echo "<b>Error!</b> Email must include min 2 characters within @ and dot(.) sign!";
            return 0;
        }
    }
    if (!str_contains($email, '.')) {
        echo "<b>Error!</b> Email must includes . sign!";
        return 0;
    }
    if (substr($email, strpos($email, '.')) == '.') {
        echo "<b>Error!</b> Email must include some character after dot(.)!";
        return 0;
    }

    $string = preg_replace('/^./', '', substr(strrev($email), strpos(strrev($email), '@')));

    if (!preg_match('/^[a-zA-Z]{2,}[0-9]*$/', strrev($string))) {
        echo "<b>Error!</b> Email must start with min 2 characters!";
        return 0;
    }
    $string = trim(preg_replace('/^./', '', substr($email, strpos($email, '.'))));

    if (strlen($string) <= 1) {
        echo "<b>Error!</b>Email must include at least to character after dot(.) sign!";
        return 0;
    }
    if (!preg_match(emailPattern, $email)) {
        echo "<b>Error!</b> Email must have characters,digits only!";
        return 0;
    }
    return 1;
}

function descValidation($desc)
{
    if (empty($desc)) {
        echo "<b>Error!</b> Description not should be empty!";
        return 0;
    } else if (strlen($desc) < 20) {
        echo "<b>Error!</b> Description have at least 20 characters!";
        return 0;
    } else if (strlen($desc) > 150) {
        echo "<b>Error!</b> Description have less than 150 characters!";
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
            echo "<b>Error!</b> Server Not Responded, try again later.";
            exit;
        }
    } catch (Exception $error) {
        echo "<b>Error!</b>" . $error->getMessage();
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
