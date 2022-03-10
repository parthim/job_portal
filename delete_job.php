<?php
    require_once 'mysql_connection.php';
    if(isset($_GET['job_id'])){
        $job_id = $_GET['job_id'];
        $job_status = $_GET['status'];
        $query = "UPDATE `job_info` SET `status`='".$job_status."' WHERE `id`='".$job_id."';";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Inserted Successfully";
        }
    }
?>