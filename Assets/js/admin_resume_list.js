$.get("http://localhost/job_portal/admin_resume_list.php",function(data,status){
    $.each(data,function(item,value){
            document.getElementById('resume_list').innerHTML = `<tr align="center">
            <th scope="row">${value.id}</th>
            <td>${value.designation}</td>
            <td>${value.company_name}</td>
            <td>${value.firstName} ${value.lastName}</td>
            <td class = "d-flex"><a href="Assets/files/${value.resume}" download><button class="btn btn-primary p-0 ml-2" style="width:100%;"><i class="fa fa-download"></i> Download</button></a></td>
            <td><a href="#" class="btn btn-default border-none ml-2"  data-bs-toggle="modal" data-bs-target="#change_status">Pending</a></td>
          </tr>`;
    });
    console.log(designation);
}) .fail(function(a,b,c){
    console.log("Invalid Url");
    console.log(a,b,c);
});