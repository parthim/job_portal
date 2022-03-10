<?php
    require_once 'mysql_connection.php';
    if(isset($_GET['designation'])){
        // echo "Hi";
        $job_id = $_GET['job_id'];
        $designation =$_GET['designation'];
        $company_name =$_GET['company_name'];
        $description =$_GET['description'];
        $status =$_GET['status'];
        $address =$_GET['address'];
        $city =$_GET['city'];
        $state =$_GET['state'];
        $country =$_GET['country'];
        $logoPath =$_GET['logoPath'];
        $updated_date =$_GET['updated_date'];

        // echo $designation;
        $query = "UPDATE `job_info` SET `designation` = '".$designation."',`Description` = '".$description."',`status` = '".$status."',`company_name` = '".$company_name."',`company_address` = '".$address."',`city` = '".$city."',`state` = '".$state."',`country` = '".$country."',`updated_date` = '".$updated_date."',`company_logo` = '".$logoPath."' WHERE `job_info`.`id` = '".$job_id."';";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Inserted Successfully";
        }
    }
?>