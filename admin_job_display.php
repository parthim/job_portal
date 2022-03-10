<?php
    require_once 'mysql_connection.php';
    $query = "SELECT `id`,`designation`,`Description`,`company_name`,`company_logo`,`status` FROM job_info";
    $result = mysqli_query($conn,$query);
    $data=[];
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    echo json_encode($data);
?>