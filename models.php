<?php

require_once 'dbConfig.php';

function insertIntoStudentRecords ($pdo, $first_name, $last_name, $age, $gender, $course, $yeargraduated, $schoolname, $religion) {

$sql = "INSERT INTO student_records (first_name, last_name, age, gender, course, yeargraduated, schoolname, religion) VALUES (?,?, ?, ?,?,?,?)";

$stmt = $pdo->prepare($sql);

$executeQuery = $stmt->execute([$first_name, $last_name, $age, $gender, $course, $yeargraduated, $schoolname, $religion]);

if ($executeQuery) {
    return true;

}

}

?>
