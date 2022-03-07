$.get("http://localhost/job_portal/job_status.php",function(data,status){
    $.each(data,function(item,value){
            document.getElementById('tab-1').innerHTML = `<div class="job-item p-3">
            <div class="row g-4">
                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid border rounded" src="Assets/images/company_logo/${value.company_logo}" alt="One" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h5 class="mb-0">${value.designation}</h5>
                        <p class="mb-2">${value.company_name}</p>
                        <p style = "font-size:20px;">${value.Description}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                    <div class="d-flex mb-3">
                        <a class="btn btn-default btn-lg" href="#" disabled>${value.application_status}</a>
                    </div>
                </div>
            </div>
        </div>`;
    });
    console.log(designation);
}) .fail(function(a,b,c){
    console.log("Invalid Url");
    console.log(a,b,c);
});