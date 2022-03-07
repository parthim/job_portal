<?php
    require_once 'mysql_connection.php';
    if(isset($_POST['add_submit'])){
        $content = htmlspecialchars($_POST['data'], ENT_QUOTES | ENT_SUBSTITUTE);
        $query = "INSERT INTO job_info (`designation`,`company_name`,`description`,`status`,`company_address`,`city`,`state`,`country`,`created_date`,`updated_date`,`company_logo`) VALUES ('".$content."')`";
        $result = mysqli_query($conn,$query);
        $data=[];
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
        }
    }
?>