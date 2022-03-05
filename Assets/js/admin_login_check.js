
let userId,email,password;
$.get("http://localhost/job_portal/mysql_connection.php",function(data,status){
    $.each(data,function(item,value){
        userId +=' '+ value.userId;
        email +=" "+ value.email_id;
        password +=' '+ value.password;
    });
}) .fail(function(a,b,c){
    console.log("Invalid Url");
    console.log(a,b,c);
});

function check(input1 , input2){
    let email_id = email.split(" ");
    let pswrd = password.split(" ");
    let user_id = userId.split(" ");
    for(let x=1;x<user_id.length;x++){
        if(input1==email_id[x] && input2==pswrd[x]){
            return true;
        }
    }
    return false;
}