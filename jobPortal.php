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
        <form action="application_status.php" method="post">
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
                            <button type="submit" onclick="loadPage();" class="btn btn-primary">Verify</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal form End -->
        <!-- Content Div Starts -->
        <div id="content_div" class="container-fluid p-0">
        <button class="btn btn-primary btn-lg my-5" data-bs-toggle="modal" data-bs-target="#candidateLoginForm">Candidate Verification</button>
        </div>
        <!-- Content Div End -->
    </div>

    <!-- JavaScript Section -->
    <script src="Assets/js/main.js"></script>
    <script language="text/javascript">
        (function loadPage(){
            window.location.href = "application_status.php";
        })();
    </script>
</body>
</html>