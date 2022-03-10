<?php
    require_once 'mysql_connection.php';
    $query = "SELECT candidate_info.status_info,job_info.designation,
    job_info.company_name,job_info.Description,job_info.company_logo,
    candidate_info.firstName,candidate_info.dob
    FROM candidate_info
    INNER JOIN job_info ON candidate_info.job_id = job_info.id;";
    $result = mysqli_query($conn,$query);
    $data=[];
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }   
    echo json_encode($data);
?>