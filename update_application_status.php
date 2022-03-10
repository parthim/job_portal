<?php
    require_once 'mysql_connection.php';
    if (isset($_GET["job_id"]))
    {
        $job_id =$_GET['job_id'];
        $application_status =$_GET['application_status'];
        $query = "UPDATE candidate_info SET status_info='".$application_status."' WHERE candidate_info.id = '".$job_id."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Updated Sucessfully";
        }

    }
    if  (isset($_POST["application_id"]))
    {
        echo "Hi";
        $application_id =trim(json_encode($_POST['application_id']),'\'"');
        $application_status =trim(json_encode($_POST['application_status']),'\'"');
        echo $application_status;
        $query = "UPDATE candidate_info SET status_info='".$application_status."' WHERE candidate_info.id = '".$application_id."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Updated Successfully";
        }
    }
?>