<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Job Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap Stylesheet link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Ajax links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="Assets/css/main.css">
    <!-- Add php files -->
</head>
<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-light shadow sticky-top">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">JobEntry</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="jobPortal.php" class="nav-item nav-link ">Job Status</a>
                    <a href="admin_login.php" class="nav-item nav-link active">Admin login</a>
            </div>
        </nav>
        <!-- Navbar End -->
        
        <!-- Second NavBar for admin options -->
        <nav class="navbar navbar-expand-lg sticky-top mt-1  p-0">
            <div class="navbar-nav ms-auto p-0 w-100" id="admin_options">
                <a href="adminPanel.php" class="w-100 "><button type="button" class="btn btn-default btn-lg fs-3">Manage Resume</button></a>
                <div class="vl"></div>
                <a href="manage_jobs.php" class="w-100 active"><button type="button" class="btn btn-default btn-lg fs-3">Manage Jobs</button></a>
            </div>
        </nav>
        <!-- Second Navbar ends -->

        <!-- Modal form for Change status -->
        <form id="form_add_job" class="d-none">
            <div class="modal fade" id="add_job" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-left">
                            <div class="modal-title w-100 fs-3">Add New Job</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body ">
                            <div class="md-form">
                                <label for="modalForm-designation fs-4">Job Designation &emsp;&emsp;&nbsp; </label>
                                <input type="text" id="modalForm-designation" class="form-control validate w-50" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-companyName fs-4">Company Name &emsp;&emsp;&nbsp; </label>
                                <input type="text" id="modalForm-companyName" class="form-control validate w-50" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-description fs-4">Job Description &emsp;&emsp;&ensp; </label>
                                <input type="text" id="modalForm-description" style="height:75px;" class="form-control validate w-50" required>
                            </div>
                            <div class = "md-form">
                            <label for="modalForm-status fs-4">Status &emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp; </label>
                                <select class="form-control gender validate w-50" required id="modalForm-status">
                                    <option value="default">Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-Address fs-4">Company Address &emsp;&nbsp; </label>
                                <input type="text" id="modalForm-Address" class="form-control validate w-50" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-city fs-4">Company City &emsp;&emsp;&emsp;&nbsp; </label>
                                <input type="text" id="modalForm-city" class="form-control validate w-50" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-state fs-4">Company State &ensp;&emsp;&emsp;&nbsp; </label>
                                <input type="text" id="modalForm-state" class="form-control validate w-50" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-country fs-4">Company Country  &emsp;&ensp; </label>
                                <input type="text" id="modalForm-country" class="form-control validate w-50" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-logo fs-4">Company Logo &ensp;&emsp;&emsp;&nbsp; </label>
                                <input type="file" id="modalForm-logo" class="form-control validate w-50" accept="image/png, image/gif, image/jpeg" required>
                            </div>  
                        </div>
                        <div class="modal-footer d-flex border-top-0">
                            <button type="button" id="add_submit" class="btn btn-primary w-50">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal form ends -->
        <form id="form_edit_job" class="d-none">
            <div class="modal fade" id="edit_job" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-left">
                            <div class="modal-title w-100 fs-3">Edit Job</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body ">
                            <div class="md-form">
                                <label for="modalForm-eDesignation fs-4">Job Designation &emsp;&emsp;&nbsp; </label>
                                <input type="text" id="modalForm-eDesignation" class="form-control validate w-50" required placeholder="">
                            </div>
                            <div class="md-form">
                                <label for="modalForm-eCompanyName fs-4">Company Name &emsp;&emsp;&nbsp; </label>
                                <input type="text" id="modalForm-eCompanyName" class="form-control validate w-50" required placeholder="">
                            </div>
                            <div class="md-form">
                                <label for="modalForm-eDescription fs-4">Job Description &emsp;&emsp;&ensp; </label>
                                <input type="text" id="modalForm-eDescription" style="height:75px;" class="form-control validate w-50" required placeholder="">
                            </div>
                            <div class = "md-form">
                            <label for="modalForm-eStatus fs-4">Status &emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp; </label>
                                <select class="form-control gender validate w-50" required id="modalForm-eStatus">
                                    <option value="default">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-eAddress fs-4">Company Address &emsp;&nbsp; </label>
                                <input type="text" id="modalForm-eAddress" class="form-control validate w-50" required placeholder="">
                            </div>
                            <div class="md-form">
                                <label for="modalForm-eCity fs-4">Company City &emsp;&emsp;&emsp;&nbsp; </label>
                                <input type="text" id="modalForm-eCity" class="form-control validate w-50" required placeholder="">
                            </div>
                            <div class="md-form">
                                <label for="modalForm-eState fs-4">Company State &ensp;&emsp;&emsp;&nbsp; </label>
                                <input type="text" id="modalForm-eState" class="form-control validate w-50" required placeholder="">
                            </div>
                            <div class="md-form">
                                <label for="modalForm-eCountry fs-4">Company Country  &emsp;&ensp; </label>
                                <input type="text" id="modalForm-eCountry" class="form-control validate w-50" required placeholder="">
                            </div>
                            <div class="md-form">
                                <label for="modalForm-eLogo fs-4">Company Logo &ensp;&emsp;&emsp;&nbsp; </label>
                                <input type="file" id="modalForm-eLogo" class="form-control validate w-50" accept="image/png, image/gif, image/jpeg" required placeholder="">
                            </div>  
                        </div>
                        <div class="modal-footer d-flex border-top-0">
                            <button type="button" id="edit_submit" class="btn btn-primary w-50">Edit </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Edit Job Modal form -->

        <!-- Modal form ends -->

        <!-- Content Div -->

        <div id="content_div" class="container-fluid tab-content mt-3">
            <div class="d-grid gap-2 d-md-block">
                <button id="main_add" class="btn btn-primary btn fs-6 mx-1 my-3 w-auto" type="button" data-bs-toggle="modal" data-bs-target="#add_job"><i class="fa fa-plus" aria-hidden="true"></i> Add Job</button>
            </div>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr align="center">
                    <th scope="col">Job Id</th>
                    <th scope="col">Job Designation</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Company Logo</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="table_contents_js">
                <!-- js populated data -->
                </tbody>
            </table>
        </div>
        <!-- Content Div End -->
    </div>

    <!-- JavaScript Section -->
    <script src="Assets/js/main.js"></script>
    <script>
        $("#main_add").click(function(){
            $("#form_add_job").removeClass('d-none');
        })
    </script>
    <script src="Assets/js/edit_job_form.js"></script>
    <script src="Assets/js/edit_job.js"></script>
    <script src="Assets/js/job_management_row.js"></script>
    <script src="Assets/js/add_job.js"></script>
    <script src="Assets/js/admin_delete_job.js"></script>
    <script src="Assets/js/update_edit_form.js"></script>

</body>
</html>