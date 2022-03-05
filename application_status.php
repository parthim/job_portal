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
                    <a href="jobPortal.php" class="nav-item nav-link active">Job Status</a>
                    <a href="admin_login.php" class="nav-item nav-link ">Admin login</a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Modal form Start -->
        <div class="modal fade" id="candidateLoginForm" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <div class="modal-title w-100 fs-3">Candidate Verification</div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body ">
                        <div class="md-form">
                            <label for="modalForm-username">Username</label><br>
                            <input type="text" id="modalForm-username" class="form-control validate w-100">
                        </div>
                        <div class="md-form">
                            <label for="modalForm-date">Date of Birth</label><br>
                            <input type="date" id="modalForm-date" class="form-control validate">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Verify</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal form End -->
        <!-- Content Div Starts -->
        <div id="content_div" class="container-fluid tab-content">
            <div id="tab-1" class="tab-pane active">
                <!-- Job 1 -->
                <div class="job-item p-3">
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid border rounded" src="Assets/images/company_logo/number-one.png" alt="One" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h5 class="mb-0">Software Engineer</h5>
                                <p class="mb-2">Number-one Company</p>
                                <p style = "font-size:20px;">Job <br> description</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                            <div class="d-flex mb-3">
                                <a class="btn btn-default btn-lg" href="#">Pending</a>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- Job 2 -->
                <div class="job-item p-3">
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid border rounded" src="Assets/images/company_logo/number-2.png" alt="One" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h5 class="mb-0">Software Developer</h5>
                                <p class="mb-2">Number-Two Company</p>
                                <p style = "font-size:20px;">Job <br> description</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                            <div class="d-flex mb-3">
                                <a class="btn btn-default btn-lg" href="#">Interview Scheduled <br> on mm/dd/yyyy</a>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- Job 3 -->
                <div class="job-item p-3">
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid border rounded" src="Assets/images/company_logo/number-3.png" alt="One" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h5 class="mb-0">Full Stack Developer</h5>
                                <p class="mb-2">Number-Three Company</p>
                                <p style = "font-size:20px;">Job <br> description</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                            <div class="d-flex mb-3">
                                <a class="btn btn-default btn-lg" href="#">Selected</a>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- Job 4 -->
                <div class="job-item p-3">
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid border rounded" src="Assets/images/company_logo/number-four.png" alt="One" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h5 class="mb-0">Trainee Software Engineer</h5>
                                <p class="mb-2">Number-four Company</p>
                                <p style = "font-size:20px;">Job <br> description</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                            <div class="d-flex mb-3">
                                <a class="btn btn-default btn-lg" href="#">Rejected</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- Content Div End -->
    </div>

    <!-- JavaScript Section -->
    <script src="Assets/js/main.js"></script>
</body>
</html>