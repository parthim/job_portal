var job ={};

$(document).ready(function() {
 
    $("#add_submit").click(function() {
        alert("Hello");
        job.designation = $('#modalForm-designation').val();
        job.company_name = $('#modalForm-companyName').val();
        job.description = $('#modalForm-description').val();
        job.job_status = $('#modalForm-status').val();
        job.address = $('#modalForm-Address').val();
        job.city = $('#modalForm-city').val();
        job.state = $('#modalFOrm-state').val();
        job.country = $('#modalForm-country').val();
        job.logo = $('#modalForm-logo').val();
        job.logoPath = job.logo.substring(12);
        var d = new Date();
        job.created_date = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
        job.updated_date = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate(); 
        alert(job.logoPath);
        // job.logoPath = job.logo.substring(12);
        if(localStorage){
            localStorage.setItem(1,JSON.stringify(job));
        }else{
            console.log("OOps!, your browser doesn't support localStorage");
        }
        $.post({  
            url: "add_job.php",  
            dataType: "json",  
            contentType: "application/json; charset=utf-8",  
            data: JSON.stringify(job),  
            success: function () {  
               alert("Data Has Inserted");  
            }  
        });  
    });
});  