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
                            <a href="./summer.php">Summer</a>
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
           
            <div class="row">
                <div class="col-lg-12">
                    
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#basic-info" data-toggle="tab">Personal Info</a>
                                </li>
                                <li><a href="#involvement" data-toggle="tab">Involvement</a>
                                </li>
                                <li><a href="#notes" data-toggle="tab">Notes</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content inner-scroll">
                                <div class="tab-pane fade in active" id="basic-info">
                                </br>
                                    <div class="info-left">
                                        <label class="info-label">Eagle ID: </label> <input type="text" readonly id="info-eagleid" class="info-div-hide-box" size="30" value="12345678"></input>
                                    </div>
                                    <div class="info-right">
                                        <label class="info-label">Position: </label> <input type="text" id="info-position" class="info-div-hide-box" size="30" value="Panels Coordinator"</input>
                                    </div> </br></br>
                                    <div class="info-left">
                                         <label class="info-label">First Name: </label> <input type="text" id="info-fn" class="info-div-hide-box" size="30" value="Abigail"></input>
                                    </div>
                                    <div class="info-right">
                                         <label class="info-label">Last Name: </label> <input type="text" id="info-ln" class="info-div-hide-box" size="30" value="Brown"></input>
                                    </div></br></br>
                                    <div class="info-left">
                                        <label class="info-label">Class: </label> <input type="text" id="info-class" class="info-div-hide-box" size="30" value="2018"></input>
                                    </div>
                                    <div class="info-right">
                                        <label class="info-label">School: </label> <input type="text" id="info-school" class="info-div-hide-box" size="30" value="MCAS"></input>
                                    </div></br></br>
                                    <div class="info-left">
                                         <label class="info-label">Major: </label> <input type="text" id="info-major" class="info-div-hide-box" size="30" value="Applied Psychology & Human Development"></input>
                                    </div>
                                    <div class="info-right">
                                        <label class="info-label">Minor: </label> <input type="text" id="info-minor" class="info-div-hide-box" size="30" value="Applied Psychology & Human Development"></input>
                                    </div></br></br>
                                    <div class="info-left">
                                         <label class="info-label">Hometown: </label> <input type="text" id="info-hometown" class="info-div-hide-box" size="30" value="Iowa City, IA"></input>
                                    </div>
                                    <div class="info-right">
                                       <label class="info-label">Local Address: </label> <input type="text" id="info-local-address" class="info-div-hide-box" size="30" value="2000 Comm Ave, 418"></input>
                                    </div></br></br>
                                    <div class="info-left">
                                        <label class="info-label">Email: </label> <input type="text" id="info-email" class="info-div-hide-box" size="30" value="brownbba@bc.edu"></input>
                                    </div>
                                    <div class="info-right">
                                       <label class="info-label">Phone: </label> <input type="text" id="info-phone" class="info-div-hide-box" size="30" value="555-555-5555"></input>   
                                    </div></br></br>
                                    <div class="info-left">
                                        <label class="info-label">Sex: </label> <input type="text" id="info-sex" class="info-div-hide-box" size="30" value="Female"></input>
                                    </div>
                                    <div class="info-right">
                                        <label class="info-label">AHANA: </label> <input type="text" id="info-ahana" class="info-div-hide-box" size="30" value="No"></input>
                                    </div> </br>
                                    </br>
                                    <div class="info-left">
                                        <label class="info-label">International: </label> <input type="text" id="info-international" class="info-div-hide-box" size="30" value="No"></input>
                                    </div>
                                    <div class="info-right">
                                        <label class="info-label">Transfer: </label> <input type="text" id="info-transfer" class="info-div-hide-box" size="30" value="No"></input>
                                    </div> </br></br>
                    
                                </div>
                                <div class="tab-pane fade" id="involvement">
                                
                                   Click <a href="./involvement.php">here</a> to see a more in-depth view of involvement</br></br>
                                    <div class="info-left">
                                        <label class="involv-label">OFFICE PROGRAMS
                                    </div>
                                    <div class="info-right">
                                        <label class="involv-label">OUTREACH PROGRAMS
                                    </div> </br>
                                    <div class="involv-left">
                                        <label class="involv-label">Panels</label>
                                    </div>
                                    <div class="involv-right">
                                        <label class="involv-label">Outreach</label>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-panels" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-outreach" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-panels" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-outreach" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Incomplete: </label> <input type="text" id="involv-incomp-panels" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Incompleted: </label> <input type="text" id="involv-incomp-outreach" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br></br>

                                    <div class="involv-left">
                                        <label class="involv-label">Tours</label> 
                                    </div>
                                    <div class="involv-right">
                                        <label class="involv-label">High School Visits</label>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-tours" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-hsvisits" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-tours" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-hsvisits" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Incomplete: </label> <input type="text" id="involv-incomp-tours" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Incompleted: </label> <input type="text" id="involv-incomp-hsvisits" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br></br>
                                    <div class="involv-left">
                                        <label class="involv-label">Greeting</label>
                                    </div>
                                    <div class="involv-right">
                                        <label class="involv-label">AHANA Outreach</label>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-greeting" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-ahana" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-greeting" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-ahana" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Incomplete: </label> <input type="text" id="involv-incomp-greeting" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Incompleted: </label> <input type="text" id="involv-incomp-ahana" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br></br>
                                    <div class="involv-left">
                                        <label class="involv-label">Office Management</label> 
                                    </div>
                                    <div class="involv-right">
                                        <label class="involv-label">International Outreach</label>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-om" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-io" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-om" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-io" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Incomplete: </label> <input type="text" id="involv-incomp-om" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Incompleted: </label> <input type="text" id="involv-incomp-io" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br></br>
                                    <div class="involv-left">
                                        <label class="involv-label">Eagle for a Day</label>
                                    </div>
                                    <div class="involv-right">
                                        <label class="involv-label">Transfer Outreach</label>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-efad" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-transfer" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-efad" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-transfer" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Incomplete: </label> <input type="text" id="involv-incomp-efad" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Incompleted: </label> <input type="text" id="involv-incomp-transfer" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br></br>
                                    <div class="involv-left">
                                        <label class="involv-label">Admitted Eagle Day</label>
                                    </div>
                                    <div class="involv-right">
                                        <label class="involv-label">Media</label>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-aed" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-media" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-aed" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-media" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Incomplete: </label> <input type="text" id="involv-incomp-aed" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        <label class="involv-label-count">Incompleted: </label> <input type="text" id="involv-incomp-media" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div> </br></br>
                                     <div class="involv-left">
                                        <label class="involv-label">Summer</label>
                                    </div>
                                    <div class="involv-right">
                                        
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Completed: </label> <input type="text" id="involv-comp-aed" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Pending: </label> <input type="text" id="involv-pend-aed" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                       
                                    </div> </br>
                                    <div class="involvd-left">
                                        <label class="involv-label-count">Incomplete: </label> <input type="text" id="involv-incomp-aed" class="involv-div-hide-box" size="1" value="3"></input>
                                    </div>
                                    <div class="involvd-right">
                                        
                                    </div> </br></br>
                                    
                                </div>
                                <div class="tab-pane fade" id="notes">
                                    <table id="notes-table">
                                        <tr class="notes-row">
                                            <td>10:00:02 07/20/16</br>Jon Giara - Head Coordinator</td>
                                            <td class="notes-data">This is my first note</td>
                                        </tr>
                                        <tr class="notes-row">
                                            <td>10:00:02 07/20/16</br>Jon Giara - Head Coordinator</td>
                                            <td class="notes-data">This is my first note sdkfhsd sdfkhdaf sdafhdsaf sdafasdhfkj dsjfkhdsa fdsafihdsaf dsafhsad,mf sdjkfhdsjb</br></br>this is a test to see</br>how many</br></br>breaks llok like</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                   
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

    <!-- Morris Charts JavaScript -->
    <script src="../dist/js/raphael-min.js"></script>
    <script src="../dist/js/morris.min.js"></script>
    <script src="../dist/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
