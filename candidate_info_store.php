<?php
    require_once 'mysql_connection.php';
    if(isset($_GET['fname'])){
        echo "Hi";
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $dob = $_GET['date'];
        $phone = $_GET['phoneNumber'];
        $cEmail = $_GET['email'];
        $selectedGender = $_GET['gender'];
        $per_10th = $_GET['per_10th'];
        $per_12th = $_GET['per_12th'];
        $b_cgpa = $_GET['cgpa'];
        $resume =$_GET['resumePath'];
        $job_id = $_GET['job_id'];
        $status_info = $_GET['status_info'];
        // echo $resume;
        $query = "INSERT INTO `candidate_info` (`id`,`firstName`,`lastName`,`dob`,`phoneNumber`,`email`,`gender`,`10th`,`12th`,`bd_cgpa`,`resume`,`job_id`,`status_info`) VALUES (NULL,'".$fname."','".$lname."','".$dob."','".$phone."','".$cEmail."','".$selectedGender."','".$per_10th."','".$per_12th."','".$b_cgpa."','".$resume."','".$job_id."',".$status_info.")";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Inserted Successfully";
        }
    }
?>