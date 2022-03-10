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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="Assets/css/main.css">
    
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
                <a href="adminPanel.php" class="w-100 active"><button type="button" class="btn btn-default btn-lg fs-3">Manage Resume</button></a>
                <div class="vl"></div>
                <a href="manage_jobs.php" class="w-100"><button type="button" class="btn btn-default btn-lg fs-3">Manage Jobs</button></a>
            </div>
        </nav>
        <!-- Second Navbar ends -->

        <!-- Modal form for Change status -->
        <form id="change_status_form" class="d-none">
            <div class="modal fade" id="change_status" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-left">
                            <div class="modal-title w-100 fs-3">Change status</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body ">
                            <div class="md-form">
                                <label for="modalForm-status fs-4">Status &emsp;&ensp; &emsp;&emsp;&emsp;&nbsp; :</label>
                                <select class="form-control validate w-50" id="modalForm-status" onchange="showOrHideDiv()">
                                    <option value="default" selected>Pending</option>
                                    <option value="interview">Interview Scheduled</option>
                                    <option value="selected">Selected</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                            <div class="md-form d-none" id="date_div">
                                <label for="modalForm-date fs-4">Scheduled on &ensp;&emsp;&nbsp :</label>
                                <input type="date" id="modalForm-date"  class="form-control validate w-50" required>
                            </div>
                            <div class="md-form d-none" id="review_div">
                                <label for="modalForm-review">Review &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; :</label>
                                <input type="text" row="5" cols="50" id="modalForm-review" class="form-control validate w-50" style="height:100px;" required>
                            </div>  
                        </div>
                        <div class="modal-footer d-flex border-top-0">
                            <button type="button" id="change_button" class="btn btn-primary w-50">Change</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <!-- Modal form ends -->

        <!-- Content Div -->
        <div id="content_div" class="container-fluid tab-content mt-3">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Application Id</th>
                    <th scope="col">Job Designation</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Candidate Name</th>
                    <th scope="col">Resume</th>
                    <th scope="col">Change Status</th>
                    </tr>
                </thead>
                <tbody id="resume_list">
                <!--  -->
                </tbody>
            </table>
        </div>
        <!-- Content Div End -->
    </div>

    <!-- JavaScript Section -->
    <script src="Assets/js/main.js"></script>
    <script src="Assets/js/admin_resume_list.js"></script>
    <script src="Assets/js/change_application_status.js"></script>
    <script src="Assets/js/update_database_status.js"></script>

</body>
</html>