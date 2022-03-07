<?php
    include 'mysql_connection.php';
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $dob = mysqli_real_escape_string($conn, $_POST['cDate']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $cEmail = mysqli_real_escape_string($conn, $_POST['cEmail']);
    $selectedGender = mysqli_real_escape_string($conn, $_POST['selectedGender']);
    $per_10th = mysqli_real_escape_string($conn, $_POST['per_10th']);
    $per_12th = mysqli_real_escape_string($conn, $_POST['per_12th']);
    $b_cgpa = mysqli_real_escape_string($conn, $_POST['b_cgpa']);
    // $resume = mysqli_real_escape_string($conn,$db_name, $_POST['resume']);
    echo fname;
?>