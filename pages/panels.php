<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Student Admission Program - Boston College</title>

    <!-- Bootstrap Core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../dist/css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../dist/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../dist/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/css/bootstrap-override.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../dist/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Student Admission Program</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="involvement.php">My Involvement</a>
                        </li>
                        <li>
                            <a href="myprofile.php">My Profile</a>
                        </li>
                        <li>
                            <a href="applications.php">Applications</a>
                        </li>
                        <li>
                            <a href="./panels.php">Panels</a>
                        </li>
                        <li>
                            <a href="./tours.php">Tours</a>
                        </li>
                        <li>
                            <a href="./greeting.php">Greeting</a>
                        </li>
                        <li>
                            <a href="./om.php">Office Management</a>
                        </li>
                        <li>
                            <a href="./efad.php">Eagle for a Day</a>
                        </li>
                        <li>
                            <a href="./aed.php">Admitted Eagle Day</a>
                        </li>
                        <li>
                            <a href="./outreach.php">Outreach</a>
                        </li>
                        <li>
                            <a href="./hsvisits.php">High School Visits</a>
                        </li>
                        <li>
                            <a href="./ahana.php">AHANA Outreach</a>
                        </li>
                        <li>
                            <a href="./io.php">International Outreach</a>
                        </li>
                        <li>
                            <a href="./transfer.php">Transfer Outreach</a>
                        </li>
                        <li>
                            <a href="./media.php">Media</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Panels</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#volunteers" data-toggle="tab">Volunteers</a>
                                </li>
                                <li><a href="#attendance" data-toggle="tab">Attendance</a>
                                </li>
                                <li><a href="#requirements" data-toggle="tab">Requirements</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="volunteers">
                                    <h4>Volunteers</h4>
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Volunteer</th>
                                                    <th>Class</th>
                                                    <th>School</th>
                                                    <th>Shift Day</th>
                                                    <th>Shift Time</th>
                                                    <th>Requirement Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id="tablebody-vols">
                                                <?php 
                                                    function connect_to_db( $dbname ){
                                                        // REMEMBER!!!
                                                        // Change the host, login, and db information
                                                        $dbc = @mysqli_connect( "localhost", "root", "root", $dbname ) or
                                                                die( "Connect failed: ". mysqli_connect_error() );
                                                        return $dbc;
                                                    }

                                                    function disconnect_from_db( $dbc, $result ){
                                                        mysqli_free_result( $result );
                                                        mysqli_close( $dbc );
                                                    }

                                                    function perform_query( $dbc, $query ){
                                                        
                                                        //echo "My query is >$query< <br />";
                                                        $result = mysqli_query($dbc, $query) or 
                                                                die( "bad query".mysqli_error( $dbc ) );
                                                        return $result;
                                                    }

                                                    $dbc    = connect_to_db( "SAP" ); 
                                                    $query  = "select first_name, last_name, class, school, shift_day, shift_time, requirements_status from Program_Members join Users on user = eagle_id and program = 1 order by last_name asc";
                                                    $result = perform_query( $dbc, $query );
                                                    while($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )) {
                                                        echo "<tr class = odd>";
                                                        echo "<td>".$row['first_name']." ".$row['last_name']."</td>";
                                                        echo "<td>".$row['class']."</td>";
                                                        echo "<td>".$row['school']."</td>";
                                                        echo "<td>".$row['shift_day']."</td>";
                                                        echo "<td>".$row['shift_time']."</td>";
                                                        echo "<td>".$row['requirements_status']."</td>";
                                                        echo "</tr>";
                                                        
                                                    }
                                                    disconnect_from_db( $dbc, $result );
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="attendance">
                                    <h4>Profile Tab</h4>
                                </div>
                                <div class="tab-pane fade" id="requirements">
                                    <h4>Messages Tab</h4>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../dist/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../dist/js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../dist/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../dist/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
