<?php
    require_once 'mysql_connection.php';
    $data=[];
    if(isset($_GET['job_id'])){
        $job_id = $_GET['job_id'];
        $query = "SELECT `id`,`designation`,`Description`,`company_name`,`status`,`company_address`,`city`,`state`,`country`,`created_date`,`updated_date`,`company_logo` FROM `job_info` WHERE id='".$job_id."'";
        $result = mysqli_query($conn,$query);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }
?>