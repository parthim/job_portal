<?php
    require_once 'mysql_connection.php';

    if(isset($_GET["designation"])){
        echo "Get method";
        $designation = $_GET["designation"];
        $description = $_GET["description"];
        $company_name = $_GET["company_name"];
        $job_status = $_GET["status"];
        $address = $_GET["address"];
        $city = $_GET["city"];
        $state = $_GET["state"];
        $country = $_GET["country"];
        $logo = $_GET["logoPath"];
        $created_date = $_GET["created_date"];
        $updated_date = $_GET["updated_date"];
        $query = "INSERT INTO `job_info` (`id`,`designation`,`Description`,`company_name`,`status`,`company_address`,`city`,`state`,`country`,`created_date`,`updated_date`,`company_logo`) VALUES (NULL,'".$designation."','".$description."','".$company_name."','".$job_status."','".$address."','".$city."','".$state."','".$country."','".$created_date."','".$updated_date."','".$logo."')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Inserted Successfully";
        }
    }
?>