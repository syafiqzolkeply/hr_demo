<?php

include_once('db_conn.php');

$created = false; //this variable is used to indicate the creation is successfull or not

// prepare and bind
$stmt = $conn->prepare("INSERT INTO employees (first_name, last_name, email, phone_number, hire_date, job_id, salary, manager_id, department_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssidii',$first_name, $last_name, $email, $phone_number, $hire_date, $job_id, $salary, $manager_id, $department_id);

// set parameters and execute
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$hire_date = $_POST['hire_date'];
$job_id = $_POST['job_id'];
$salary = $_POST['salary'];
$manager_id = $_POST['manager_id'];
$department_id = $_POST['department_id'];
$stmt->execute();

//the logic
if ($stmt) {
    $created = true;
}

$stmt->close();
$conn->close();

header('db_connect.php');

?>