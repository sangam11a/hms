<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
include_once "../includes/init.php";
date_default_timezone_set('Asia/Kathmandu');
$check = checkLogin();
// if ($_SESSION['role'] === "manager" || $_SESSION['role'] === "admin") {//just went to infinite loop
//   echo "<script>location.href='../rooms/dashboard_admin.php';</script>";
// }
?>
<!--DOCTYPE html-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <script type="text/javascript" src="../layout/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../layout/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../rooms/index.php"><img src="../images/logo.jpg" alt="Image" height="50px" width="50px" style="border-radius: 50%;">HMS</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
        <!-- Navbar -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-sign-out-alt text-danger"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../password">Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../rooms/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <?php if ($_SESSION['role'] == "manager" || $_SESSION['role'] =="admin") { ?>
                            <a class="nav-link" href="../admin/index.php">
                            <?php } else { ?>
                                <a class="nav-link" href="../rooms/index.php">
                                <?php
                            }
                                ?>
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                                </a>
                                <!-- <a class="nav-link" href="../rooms/rooms.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                Rooms
                            </a>
                            <a class="nav-link" href="../rooms/roomnumber.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                                Room Number
                            </a>
                            <a class="nav-link" href="../rooms/assign_room.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                Assign Rooms
                            </a>
                            <a class="nav-link" href="../rooms/checkout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                                Check out
                            </a>
                            <a class="nav-link" href="../rooms/view_assigned_rooms.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                View Assigned Rooms
                            </a> -->


                               
                            <?php
                                //  echo '<a class="nav-link" href="../admin/report.php">
                                //      <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                //     Report
                                //  </a>';
                                   if($_SESSION["role"]=="admin") 
                                   { 
                                           echo '<a class="nav-link" href="../admin/report.php">
                                                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                                Report
                                             </a>';

                                    //    echo '<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#reports" aria-expanded="false" aria-controls="reports">
                                //         <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                //         Reports
                                //         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                //         </a>
                                //         <div class="collapse" id="reports" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                //             <nav class="sb-sidenav-menu-nested nav">
                                //                 <a class="nav-link" href="../admin/report.php">
                                //                     <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                                //                     See reports
                                //                 </a>
                                //             </nav>
                                //         </div>';  
                                    }  
                                ?>
                              <?php
                              if(!($_SESSION["role"]=="manager"||$_SESSION["role"]=="admin"))
                                {echo '
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRooms" aria-expanded="false" aria-controls="collapseRooms">
                                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                                Rooms
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="collapseRooms" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="../rooms/rooms.php">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                                    Rooms
                                                </a>
                                                <a class="nav-link" href="../rooms/roomnumber.php">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                                                    Room Number
                                                </a>
                                                <a class="nav-link" href="../rooms/assign_room.php">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                                    <!-- Assign Rooms -->
                                                    Check In
                                                </a>
                                                <a class="nav-link" href="../rooms/checkout.php">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                                                    Check out
                                                </a>
                                                <a class="nav-link" href="../rooms/view_assigned_rooms.php">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                                    View Assigned Rooms
                                                </a>
                                            </nav>
                                        </div>

                                ';   }
                                else{
                                  echo ' <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRooms" aria-expanded="false" aria-controls="collapseRooms">
                                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                                Rooms
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="collapseRooms" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="../admin/room_history.php">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                                    Rooms History
                                                </a>                                                
                                            </nav>
                                        </div>';
                                } 
                              ?>
                                


                                

                                <?php if ($_SESSION['role'] === "admin") { ?>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                        Users
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../admin/userslist.php">Users List</a>
                                            <a class="nav-link" href="../admin/roleadd.php">Role Add</a>
                                        </nav>
                                    </div>
                                <?php } ?>
                                <?php if ($_SESSION['role'] != "manager") { ?>
                                    <!-- <div class="sb-sidenav-menu-heading">Interface</div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                        Users
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/hms/rooms/receptionlist.php">Reception User List</a>
                                        </nav>
                                    </div> -->
                                <?php } ?>
                                <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"> -->
                                <!-- <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Login</a>
                                            <a class="nav-link" href="#">Register</a>
                                            <a class="nav-link" href="#">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">404 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div> -->



                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrders" aria-expanded="false" aria-controls="collapseOrders">
                                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                    Orders
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseOrders" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">

                                        <?php
                                        if ($_SESSION["role"] != "admin") {
                                            echo '
                                            <a href="../order/order2.php" class="nav-link">
                                            Take Orders
                                        </a>
                                        <a href="../order/Overall_orders.php" class="nav-link">
                                            Orders
                                        </a>
                                        <a href="../order/add_menu.php" class="nav-link">
                                            Add menu
                                        </a>
                                        <a href="../admin/report.php" class="nav-link">
                                        Reports
                                        </a>
                                            ';
                                        } else {
                                            echo '
                                            <a href="../inventory/add_inventory_details.php" class="nav-link">
                                                Add inventory
                                            </a>
                                            ';
                                        }
                                        ?>

                                    </nav>
                                </div>




                                <?php
                                if ($_SESSION["role"] != 'admin') {
                                    echo '<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#booking_details" aria-expanded="false" aria-controls="booking_details">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Booking
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="booking_details" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../booking/index.php">
                                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                                    Book Room
                                            </a>
                                            <!-- <a class="nav-link" href="../rooms/roomnumber.php">
                                                <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                                            Table Bookings
                                            </a> -->
                                            <!-- <a class="nav-link" href="../booking/view_bookings_chart.php"> -->
                                            <a class="nav-link" href="../booking/booking_table.php"> 
                                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                                <!-- Check in--Booked customer -->
                                                View booking Chart
                                            </a>
                                            <a class="nav-link" href="../booking/assign_booked_rooms.php">
                                                <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                                                Check in--Booked customer
                                            </a>
                                        </nav>
                                    </div>
                                    ';
                                } else {
                                //    echo '   <a class="nav-link" href="../admin/report.php">
                                //                 <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                                //                 Reports
                                //             </a>';
                                
                                
                            }
                                ?>




                                <!-- <div>
                            <a href="../order/take_order.php" class="nav-link">
                                Take Orders
                            </a>
                            <a href="../order/Overall_orders.php" class="nav-link">
                                Orders
                            </a>
                            <a href="../order/add_menu.php" class="nav-link">
                                Add menu
                            </a>
                            <a href="../report/report.php" class="nav-link">
                               Reports
                            </a>
                            <a href="../inventory/add_inventory_details.php" class="nav-link">
                                Add inventory
                            </a>

                        </div> -->

                                <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php // echo $_SESSION['logged'];
                        ?>
                    </div> -->
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">