<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Profile - Student Admission Program - Boston College</title>

    <!-- Bootstrap Core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../dist/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

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
                    </ul>
                    <div id="side-scroll">
                        <ul class="nav" id="side-menu">
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
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row" id="profile-header-row">
                <div class="col-md-6">
                    <h1 style="white-space: nowrap; margin-top: 40px">My Profile</h1>
                </div>
                <div class="col-md-6">
                    <img class="profile-pic img-thumbnail" src="../img/coord_gail.jpg">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="user-info">
                <div class="info-left">
                    <label class="info-label">Eagle ID: </label> <span id="info-eagleid" class="info-div">12345678</span>
                </div>
                <div class="info-right">
                    <label class="info-label">Position: </label> <span id="info-position" class="info-div">Panels Coordinator</span>
                </div> </br></br>
                <div class="info-left">
                     <label class="info-label">First Name: </label> <span id="info-fn" class="info-div">Abigail</span>
                </div>
                <div class="info-right">
                     <label class="info-label">Last Name: </label> <span id="info-ln" class="info-div">Brown</span>
                </div></br></br>
                <div class="info-left">
                    <label class="info-label">Class: </label> <span id="info-class" class="info-div">2018</span>
                </div>
                <div class="info-right">
                    <label class="info-label">School: </label> <span id="info-school" class="info-div">MCAS</span>
                </div></br></br>
                <div class="info-left">
                     <label class="info-label">Major: </label> <span id="info-major" class="info-div">Applied Psychology and Human Development</span>
                </div>
                <div class="info-right">
                    <label class="info-label">Minor: </label> <span id="info-minor" class="info-div">Applied Psychology and Human Development</span>
                </div></br></br>
                <div class="info-left">
                     <label class="info-label">Hometown: </label> <span id="info-hometown" class="info-div">Iowa City, IA</span>
                </div>
                <div class="info-right">
                   <label class="info-label">Local Address: </label> <span id="info-local-address" class="info-div">2000 Comm Ave, 418</span>
                </div></br></br>
                <div class="info-left">
                    <label class="info-label">Email: </label> <span id="info-email" class="info-div">brownbba@bc.edu</span>
                </div>
                <div class="info-right">
                   <label class="info-label">Phone: </label> <span id="info-phone" class="info-div">555-555-5555</span>   
                </div></br></br>
            </div>

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

    <!-- Morris Charts JavaScript -->
    <script src="../dist/js/raphael-min.js"></script>
    <script src="../dist/js/morris.min.js"></script>
    <script src="../dist/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
