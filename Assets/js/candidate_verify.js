var userName,dob;
$.get("http://localhost/job_portal/candidate_verification.php",function(data,status){
    $.each(data,function(item,value){
        userName +=' '+ value.firstName;
        dob +=" "+ value.dob;
    });
}) .fail(function(a,b,c){
    console.log("Invalid Url");
    console.log(a,b,c);
});
function check(input1 , input2){
    let user_name = userName.split(" ");
    let date = dob.split(" ");
    for(let x=1;x<user_name.length;x++){
        if(input1==user_name[x] && input2==date[x]){
            return true;
        }
    }
    let condition ={};
    return false;
}