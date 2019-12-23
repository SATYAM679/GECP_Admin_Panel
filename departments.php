<!-- <html> -->
<?php
include_once './templates/head.php';
?>
</head>
<!-- </head> -->
<?php
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
} else {
    ?>

    <body class="animsition">
        <div class="page-wrapper">

            <!-- HEADER MOBILE-->
            <?php
                include_once './templates/headerMobile.php'
                ?>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <?php
                include './templates/menuSidebar.php'
                ?>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <?php
                    include './templates/headerDesktop.php'
                    ?>
                <!-- HEADER DESKTOP-->
                <?php

                    ?>
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">

                                <!-- Department TABLE -->
                                <h2 class="title-5 m-b-35"> <b>Departments</b></h2>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <a href="signup.php"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                <i class="zmdi zmdi-plus"></i>add department</button></a>
                                    </div>
                                </div>



                                <?php
                                    $sql = "SELECT * FROM departments;";

                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        echo '<div class="table-responsive table--no-card m-b-30">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                            <tr>
                                                <th>ID no.</th>
                                                <th>Name</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '     
                                            
                                                        <tr class="tr-shadow">
                                                        <td><b>' . $row['id'] . '.</b>
                                                        
                                                        </td>
                                                        <td><span class="block-email">' . $row['name'] . '</span></td>';


                                            echo '                                                      
                                                        <td> |
                                                        <a href="#"><button class="btn btn-info">View</button></a> &nbsp; &nbsp;
                                                        <a href="updateDepartment.php?dept=' . $row['id'] . '"><button class="btn btn-warning">Edit</button></a> &nbsp;&nbsp;
                                                        <a href="#"><button class="btn btn-danger">Delete</button></a> &nbsp;|                                                                                                                                                                                   
                                                        </td>
                                                        </tr>
                                                        <tr class="spacer"></tr>';
                                        }
                                        echo '              </tbody>
                                    </table>
                                </div>';
                                    } else {
                                        echo "SQL ERROR";
                                    }
                                    ?>



                                <!-- <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">lori@example.com</span>
                                            </td> -->



                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        // code -->

                    </div>
                </div>
                <!-- END MAIN CONTENT-->
            </div>
            <!-- END PAGE CONTAINER-->

        </div>
        <!-- END PAGE WRAPPER -->


        <!-- START <script> -->
        <?php
            include_once './templates/script.php'
            ?>
        <!-- END </script> -->
    </body>

    </html>
    <!-- end document-->
<?php } ?>