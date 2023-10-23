<?php
require_once('../connection.php');
$sql5="SELECT username FROM signup where adm_status ='1'";
$r5=mysqli_query($con, $sql5);
while($row1 = mysqli_fetch_array($r5)){
  $uname=$row1['username'];
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arogini-Add admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Arogini</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $uname ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php?page=0" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="crrequest_admin.php?page=0" class="nav-link nav-item"><i class="fa fa-laptop me-2"></i>Current Requests</a>
                    <a href="blood_count.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Blood Count</a>
                    <div class="nav-item dropdown">
                      <a href="hospitals.php" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-keyboard me-2"></i>Hospitals</a>
                      <div class="dropdown-menu bg-transparent border-0">
                         <a href="add_hospitals.php" class="dropdown-item">Add hospitals</a>
                         <a href="view_hospitals.php" class="dropdown-item">View hospitals</a>
                     </div>
                   </div>
                    <a href="camps.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Blood Camps</a>
                    <a href="admin.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Add admin</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $uname ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="../login.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="bg-secondary rounded h-100 p-4 ">
      <h3 class="mb-5 text-center" style="font-size: 40px" style="color: #EB1616 !important; font-weight: bold;">ADD ADMIN</h3>

<div class="wrapper">
  <form action="add_admin.php" method="POST">
    <section class="h-50 h-custom gradient-custom-2 rounded overflow-auto">

   <!-- // white -->
  <div class="row g-0">
    <div class="col-lg-6">
      <div class="p-5" style="color: #EB1616">

                  <h3 class="fw-normal mb-5" style="color: #EB1616";>General Infomation</h3>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2" >
                      <div class="form-outline">
                        <input type="text" name="fname" class="form-control form-control-lg temp" style="color: #000000" required/>
                        <label class="form-label" for="form3Examplev2">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="lname" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplev3">Last name</label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="emailid" class="form-control form-control-lg temp" required />
                        <label class="form-label" for="form3Examplev5">Email ID</label>
                      </div>
                  </div>
                  <div class="row mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="username" class="form-control form-control-lg temp" required />
                        <label class="form-label" for="form3Examplev5">Username</label>
                      </div>
                  </div>
                  <div class="row mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="password" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplev5">Password</label>
                      </div>
                  </div>
                  <div class="row mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="cpassword" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplev5">Confirm Password</label>
                      </div>
                  </div>
                </div>
              </div>

              <!-- // lal -->
              <div class="col-lg-6 bg-indigo" style="color: #EB1616";>
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #EB1616";>Contact Details</h3>
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" name="address" class="form-control form-control-lg temp" required/>
                      <label class="form-label" for="form3Examplea2">Address</label>
                    </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" name="info" class="form-control form-control-lg temp" required/>
                      <label class="form-label" for="form3Examplea3">Additional Information</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" name="code" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" name="city" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplea5">City</label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" name="country" class="form-control form-control-lg temp" required/>
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>
                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" name="number" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>
              </div>
                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="" class="text-white"><u>Terms and Conditions</u></a> of your
                      site.
                    </label>
                  </div>
      </div>
    </div>
    <input type="submit" value="submit" name="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark" style="width: 100px; margin: auto">
  </div>
</form>
</section>
</div>


</div>
</div>
</div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-20 text-center">
                            &copy; <a href="#">Arogini</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->


        </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
