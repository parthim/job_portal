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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
                    <a href="jobPortal.php" class="nav-item nav-link ">Job Status</a>
                    <a href="admin_login.php" class="nav-item nav-link ">Admin login</a>
            </div>
        </nav>
        <!-- Navbar End -->
        <!-- Modal form for Candidate info Start -->
        
        <form id="form_candidate_info" class="d-none">
            <div class="modal fade" id="candidateInfoForm" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-left">
                            <div class="modal-title w-100 fs-3">Candidate Information</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body ">
                            <div class="md-form">
                                <label for="modalForm-fname fs-4">First Name &emsp;&emsp;&emsp; </label>
                                <input type="text" id="modalForm-fname" class="form-control validate w-75" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-lname fs-4">Last Name &emsp;&emsp;&emsp; </label>
                                <input type="text" id="modalForm-lname" class="form-control validate w-75" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-date fs-4">DOB &emsp;&emsp;&emsp;&ensp;&emsp;&emsp; </label>
                                <input type="date" id="modalForm-date" class="form-control validate w-75" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-phoneNumber fs-4">Phone Number &emsp; </label>
                                <input type="tel" id="modalForm-phoneNumber" class="form-control validate w-75" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-email fs-4">Email &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp; </label>
                                <input type="email" id="modalForm-email" class="form-control validate w-75" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-gender fs-4">Gender &emsp; &emsp;&emsp;&emsp;&nbsp; </label>
                                <select class="form-control gender validate w-75" required id="modalForm-gender">
                                    <option value="default">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-1oth fs-4">10th Percentage &ensp; </label>
                                <input type="number" id="modalForm-10th" class="form-control validate w-75" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-12th fs-4">12th Percentage &ensp; </label>
                                <input type="number" id="modalForm-12th" class="form-control validate w-75" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-cgpa fs-4">Bachelor Degree<br>CGPA &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; </label>
                                <input type="number" id="modalForm-cgpa" class="form-control validate w-75" step=".01" required>
                            </div>
                            <div class="md-form">
                                <label for="modalForm-Resume fs-4">Resume &nbsp;&emsp;&emsp;&emsp;&emsp; </label>
                                <input type="file" id="modalForm-Resume" class="form-control validate w-75" required name="resume">
                            </div>
                        </div>
                        <div class="modal-footer d-flex">
                            <button type="close" class="btn btn-secondary w-25" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button type="button" id="candidate_info_button" class="btn btn-primary w-25">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>        
        <!-- Modal form end -->
        <!-- Content Div -->
        <div class="row">
            <div id="content_div" class=" tab-content column1" style="margin-left:4%;border-right:1px solid #000;margin-top:15px; ">
                <div id="i_tab-1" class="tab-pane active">
                    <!-- js added jobs here -->
                </div>
            </div>
            <div id="option-div" class=" tab-content column2"></div>
        </div>
        <!-- Content Div End -->
    </div>

    <!-- JavaScript Section -->
    <script src = "Assets/js/main.js"></script>
    <script src = "Assets/js/index_info_display.js"></script>
    <script src = "Assets/js/candidate_info.js"></script>
</body>
</html>