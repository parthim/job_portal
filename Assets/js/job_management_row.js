$.get("http://localhost/job_portal/index_job_display.php",function(data,status){
    $.each(data,function(item,value){
            document.getElementById('table_contents_js').innerHTML = `<tr align = "center">
            <th scope="row">1</th>
            <td>${value.designation}</td>
            <td>${value.company_name}</td>
            <td><img src="Assets/images/company_logo/${value.company_logo}" style="width:15%;display:block;margin: 0px -180px;" alt="Company Logo"></td>
            <td><div class="d-flex">
                <button class="btn btn-primary mx-3" type="button" data-bs-toggle="modal" data-bs-target="#edit_job">Edit</button>
                <button class="btn btn-primary mx-1" type="button" data-bs-toggle="modal" data-bs-target="#delete_job">Delete</button>
            </div></a></td>
        </tr>`;
    });
}) .fail(function(a,b,c){
    console.log("Invalid Url");
    console.log(a,b,c);
});