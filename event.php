<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/DBMS.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

 <!-- Navigation -->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">College Event Planner</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <!--<a href="#" data-toggle="modal" data-target="#myModal1">Sign In</a>-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="loginUserName">Username (Usually Email)</label>
                                            <input type="text" class="form-control" id="loginUserName" placeholder="Username (Usually Email)" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="loginPassword">Password</label>
                                            <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
                                            <div class="help-block text-right"><a href="">Forgot Password</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember Me
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <li>
                        <a href="student.php">Student Portal</a>
                    </li>
                    <li>
                        <a href="RSO.php">RSO Portal</a>
                    </li>
                    <li>
                        <a href="college.php">College Portal</a>
                    </li>
                    <li class="dropdown">
                                <a href="event.php">View Events</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <br>
            <h1 class="page-header">Event Portal
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Image Header -->
    <div class="row">
        <div class="col-lg-12">
            <img class="img-responsive" src="images/event.jpg" alt="">
        </div>
    </div>
    <!-- /.row -->

    <!-- Service Tabs -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Here are some Public Events coming up</h2>
        </div>
        <div class="col-lg-12">

            <ul id="myTab" class="nav nav-tabs nav-justified">
                <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Event Info</a>
                </li>
                <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-list"></i> Create An Event (must be an Admin)</a>
                </li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="service-one">
                <h4>Events</h4>
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="eventDetails.html">Pokemon Go</a></td>
                        <td>Every Day</td>
                        <td>All Day</td>
                        <td>Everywhere</td>
                    </tr>
                    <tr>
                        <td><a href="eventDetails.html">Pokemon Go</a></td>
                        <td>Every Day</td>
                        <td>All Day</td>
                        <td>Everywhere</td>
                    </tr>
                    <tr>
                        <td><a href="eventDetails.html">Pokemon Go</a></td>
                        <td>Every Day</td>
                        <td>All Day</td>
                        <td>Everywhere</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="service-two">
            <h4>Create An Event</h4>
             <form action="#" method="post">
                        <fieldset class="form-group">
                            <label for="registerTypeEvent">Type of Event</label>
                            <select class="form-control form-control-sm" name="registerTypeEvent">
                                <option value="RSO">RSO</option>
                                <option value="Private">Private</option>
                                <option value="Public">Public</option>
                            </select>
                        </fieldset>                       
                        <fieldset class="form-group">
                            <label for="registerNameEvent">Event Name</label>
                            <input type="text" class="form-control" id="registerNameEvent" placeholder="Event Name" name="registerNameEvent">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="registerDescEvent">Event Description</label>
                            <input type="text" class="form-control" id="registerDescEvent" placeholder="Event Description" name="registerDescEvent">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="registerTimeEvent">Event Time</label>
                            <input type="time" class="form-control" id="registerTimeEvent" placeholder="ex. 5:00 AM - 5:00 PM" name="registerTimeEvent">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="registerDateEvent">Event Date</label>
                            <input type="date" class="form-control" id="registerDateEvent" placeholder="MM/DD/YY" name="registerDateEvent">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="registerEmailEvent">Contact Email Address</label>
                            <input type="email" class="form-control" id="registerEmailEvent" placeholder="Enter email" name="registerEmailEvent"> 
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="registerNumberEvent">Contact Phone Number</label>
                            <input type="text" class="form-control" id="registerNumberEvent" placeholder="(xxx)xxx - xxxx" name="registerNumberEvent">
                        </fieldset>
                        <input id="submit" name="submit" type="submit" value="submit" class="btn btn-primary">
                    </form>
        </div>
    </div>

</div>
</div>
<hr>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; College Event Planner 2016</p>
        </div>
    </div>
</footer>

</div>
<!-- /.container -->

<?php

                if (isset($_POST['submit']))
                {
                    $email =  -1;
                    $phone_num = -1;
                    $date = -1;
                    $description = -1;
                    $name = -1;
                    $time = -1;
                    $type = -1;


                    $conn = mysqli_connect("localhost","root","root", "dbms");
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                        echo "Failed to connect to my MySQL: " . mysqli_connect_error();
                    }

                   
                    $email =  $_POST["registerEmailEvent"];
                    $phone_num = $_POST["registerNumberEvent"];
                    $date = $_POST["registerDateEvent"];
                    $description = $_POST["registerDescEvent"];
                    $name = $_POST["registerNameEvent"];
                    $time = $_POST["registerTimeEvent"];
                    $type = $_POST["registerTypeEvent"];

                    $sql = mysqli_query($conn, "INSERT INTO event (email, phone_num, date, description, name, time, type)VALUES ('$email','$phone_num','$date', '$description', '$name', 'time', 'type')") or die(mysqli_error($conn));

                    $eventid = mysqli_insert_id($conn);

                    if ($conn->multi_query($sql) === TRUE) {
                        echo "New records created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    mysqli_close($conn);
                }
               //
                ?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>