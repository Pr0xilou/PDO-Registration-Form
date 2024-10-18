<?php
require_once "dbConfig.php";
require_once "models.php";

if (isset($_POST["insertNewWebDevBtn"])) {
    $dev_id = $_POST["dev_id"];
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $phoneNum = $_POST["phoneNum"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $skill = $_POST["skill"];
        $query = insertIntoWebDevDeptRecords($pdo, $dev_id, $firstName, $lastName, $email, $phoneNum, $address, $gender, $skill);

        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "insertion of new data has failed";
    }
}
if (isset($_POST["insertNewWebDevBtn"])) {
    $dev_id = trim($_POST["dev_id"]);
    $firstName = trim($_POST["fname"]);
    $lastName = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $phoneNum = trim($_POST["phoneNum"]);
    $address = trim($_POST["address"]);
    $gender = trim($_POST["gender"]);
    $skill = trim($_POST["skill"]);

    if (!empty($dev_id) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($phoneNum) && !empty($address) && !empty($gender) && !empty($skill)) {
        $query = insertIntoWebDevDeptRecords($pdo, $dev_id, $firstName, $lastName, $email, $phoneNum, $address, $gender, $skill);

        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Insertion of new data has failed";
        }
    } else {
        echo "Make sure there is no empty field";
    }
}
if (isset($_POST["editWebDevBtn"])){
    $dev_id = $_GET["dev_id"];
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $phoneNum = $_POST["phone_number"];
    $address = $_POST["adress"];
    $gender = $_POST["gender"];
    $skill = $_POST["skill"];
        $query = updateWebDev($pdo, $dev_id, $firstName, $lastName, $email, $phoneNum, $address, $gender, $skill);

        if ($query){
            header("Location: ../index.php");
        } else {
            echo "Updating of new data has failed";
    }
}
if (isset($_POST["editWebDevBtn"])){
    $dev_id = $_GET["dev_id"];
    $firstName = trim($_POST["fname"]);
    $lastName = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $phoneNum = trim($_POST["phone_number"]);
    $address = trim($_POST["adress"]);
    $gender = trim($_POST["gender"]);
    $skill = trim($_POST["skill"]);

    if (!empty($dev_id) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($phoneNum) && !empty($address) && !empty($gender) && !empty($skill)) {

        $query = updateWebDev($pdo, $dev_id, $firstName, $lastName, $email, $phoneNum, $address, $gender, $skill);

        if ($query){
            header("Location: ../index.php");
        } else {
            echo "Updating of new data has failed";
        }
    } else {
            echo "Make sure there is no empty field";
        }
    }
if (isset($_POST["deleteWebDevBtn"])){
    $query =  deleteWebDev($pdo, $_GET['dev_id']);

    if ($query){
        header("Location: ../index.php");
    }
    else {
        echo "Deletion of data has failed";
    }
}
