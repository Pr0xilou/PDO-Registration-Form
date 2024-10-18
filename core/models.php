<?php
require_once "dbConfig.php";

function seeAllWebDevDeptData($pdo){
    $sql = "SELECT * FROM web_dev_dept";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt->fetchAll();
    }   
}
function insertIntoWebDevDeptRecords($pdo, $dev_id, $firstName, $lastName, $email, $phoneNum, $address ,$gender, $skill) {
    $sql = "INSERT INTO web_dev_dept (dev_id, first_name, last_name, email, phone_number, adress, gender, skill) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute(array($dev_id, $firstName, $lastName, $email, $phoneNum, $address ,$gender, $skill));

    if ($executeQuery){
        return true;
    }
}
function getWebDevByID($pdo, $dev_id){
    $sql = "SELECT * FROM web_dev_dept WHERE dev_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$dev_id])){
        return $stmt->fetch();
    }
}
function updateWebDev($pdo, $dev_id, $firstName, $lastName, $email, $phoneNum, $address, $gender, $skill) {
    $sql = "UPDATE web_dev_dept SET first_name = ?, last_name = ?, email = ?, phone_number = ?, adress = ?, gender = ?, skill = ? WHERE dev_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$firstName, $lastName, $email, $phoneNum, $address, $gender, $skill, $dev_id]);

    if ($executeQuery) {
        return true;
    }
    return false; 
}
function deleteWebDev($pdo, $dev_id){
    $sql = "DELETE FROM web_dev_dept WHERE dev_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$dev_id]);

    if ($executeQuery){
        return true;
    }
}
?>