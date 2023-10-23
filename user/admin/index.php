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
    <title>Arogini-Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
    <script type="text/javascript">
      let obj = [];
      let val = []
    </script>
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
                    <a href="index.php?page=0" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div>
                      <a href="crrequest_admin.php?page=0" class="nav-link"><i class="fa fa-laptop me-2"></i>Current Requests</a>
                        <!-- <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div> -->
                    </div>
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
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="../login.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Donors registered today</p>
                                <h6 class="mb-0"><?php
                                $sql8 = "SELECT count(*) FROM becomedonor where dt=CURDATE() ";
                                $r8 = $con->query($sql8);

                                while($row8 = mysqli_fetch_array($r8))
                                {
                                  echo $row8['count(*)'];
                                  echo "<br />";
                                }
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Donors Registered</p>
                                <h6 class="mb-0"><?php
                                $sql6 = "SELECT count(*) FROM becomedonor ";
                                $r6 = $con->query($sql6);

                                while($row6 = mysqli_fetch_array($r6))
                                {
                                  echo $row6['count(*)'];
                                  echo "<br />";
                                }
                                ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Requestors registered today</p>
                                <h6 class="mb-0"><?php
                                $sql9 = "SELECT count(*) FROM requestblood where dt=CURDATE() ";
                                $r9 = $con->query($sql9);

                                while($row9 = mysqli_fetch_array($r9))
                                {
                                  echo $row9['count(*)'];
                                  echo "<br />";
                                }
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total requesters registered</p>
                                <h6 class="mb-0"><?php
                                $sql7 = "SELECT count(*) FROM requestblood ";
                                $r7 = $con->query($sql7);

                                while($row7 = mysqli_fetch_array($r7))
                                {
                                  echo $row7['count(*)'];
                                  echo "<br />";
                                }
                                ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                  <!-- <div class="container-fluid pt-4 px-4"> -->
                      <div class="bg-secondary text-center rounded p-3">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                              <h6 class="mb-20">Blood Count</h6>
                          </div>
                          <div class="table-responsive">
                              <table class="table  table-bordered table-hover mb-0 col-sm-12 col-xl-6">
                                  <thead>
                                      <tr class="text-white">
                                          <th scope="col">Blood Group</th>
                                          <th scope="col">Avilable count</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                  <?php

                                    $sql = "SELECT DISTINCT BloodGroup FROM becomedonor";
                                    $result = mysqli_query($con, $sql);


                                    while($row = mysqli_fetch_assoc($result)) {

                                      $tempQuery = "SELECT COUNT(BloodGroup) AS C FROM becomedonor WHERE BloodGroup = '".$row['BloodGroup']."'";
                                      $tempResult = mysqli_query($con, $tempQuery);
                                      $c = mysqli_fetch_assoc($tempResult)['C'];
                                      ?>
                                      <tr>
                                          <script>

                                            obj.push(<?php echo json_encode($row) ?>)
                                            val.push(<?php echo json_encode($c); ?>)
                                          </script>

                                          <td><?php echo $row['BloodGroup']; ?></td>
                                          <td><?php echo $c; ?></td>

                                      </tr>
                                      <?php

                                    }
                                  ?>

                                  </tbody>
                              </table>
                          </div>

                      </div>
                  <!-- </div> -->

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4 bloodcountchart">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Blood Count</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="myChart"></canvas>

                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Donors</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="requestblood"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Current Requests</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive pagination">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Date</th>
                                    <th scope="col">Patient Name</th>
                                    <th scope="col">Blood Group</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <script>
                                let reqbloodgroup = []
                                let reqbloodgroupcount = []
                              </script>
                              <?php
                                  $sql = "SELECT * FROM requestblood WHERE status = 0 LIMIT ".$_GET['page'].",3";
                                  $query_run = mysqli_query($con, $sql);


                                  $f = "SELECT BloodGroup, COUNT(*) AS C FROM requestblood WHERE status = 0 GROUP by BloodGroup";
                                  $query_f = mysqli_query($con, $f);


                                  while($row = mysqli_fetch_assoc($query_run))
                                  {

                                          ?>

                                          <tr>
                                              <td><?php echo $row['RequiredDate']; ?></td>
                                              <td><?php echo $row['PatientName']; ?></td>
                                              <td><?php echo $row['BloodGroup']; ?></td>
                                              <td><?php echo $row['PhoneNumber']; ?></td>
                                              <td><?php echo $row['City']; ?></td>
                                              <td><button class="btn-danger" onClick="fun(<?php echo $row['id']?>)">Detail</button></td>
                                          </tr>
                                          <?php
                                  }
                               ?>

                               <?php
                                while($row = mysqli_fetch_assoc($query_f)) {
                               ?>


                               <script>
                                 reqbloodgroup.push(<?php echo json_encode($row) ?>)
                               </script>

                             <?php } ?>

                                </tr>
                            </tbody>

                        </table>
                        <?php
                          $s = "SELECT COUNT(*) FROM requestblood WHERE status = 0";
                          $res = mysqli_query($con , $s);
                          $row = mysqli_fetch_assoc($res);

                          for($i=0;$i<$row['COUNT(*)']/3;$i++){
                        ?>

                        <a href="http://localhost/shivang/user/admin/index.php?page=<?php echo $i; ?>"><?php echo $i+1 ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>




            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-20 text-center">
                            &copy; <a href="#">Arogini</a>, All Right Reserved.
                        </div>
                        <!-- <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <!-- <a href="index.html" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

<div id="popup">

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
    <script src="https://raw.githubusercontent.com/chartjs/Chart.js/master/docs/scripts/utils.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<script type="text/javascript">
let ctx = document.querySelector('#myChart')
let requestblood = document.querySelector('#requestblood')

let colors = ['rgb(199, 0, 57)',
'rgb(54, 162, 235)',
'rgb(0,91,65)',
'rgb(192, 127, 0)',
'rgb(251, 161, 183)',
'rgb(8, 2, 163)',
'rgb(245, 247, 248)',
'rgb(249, 148, 23)'
]

const data = {
  labels: obj.map(e => e.BloodGroup),
  datasets: [{
    label: 'Blood Count',
    data: val,
    backgroundColor: colors,
    hoverOffset: 4
  }]
};
const config = {
type: 'doughnut',
data: data,
};

new Chart(ctx, {

  type: 'doughnut',
  data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });


  const bardata = {
    labels: reqbloodgroup.map(e => e.BloodGroup),
    datasets: [{
      label: 'My First Dataset',
      data: reqbloodgroup.map(e => e.C),
      backgroundColor: colors,
      hoverOffset: 4
    }]
  };

new Chart(requestblood, {

    type: 'pie',
    data: bardata,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
</script>
</html>
