<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <form action="home.php" method="post">
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="Contact.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input name="Fname" class="input--style-4" id="Fname" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input name="Lname" class="input--style-4" id="Lname" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    
                                    <div class="input-group-icon">
                                        <input name="DOB" class="input--style-4 js-datepicker" type="date" id="DOB">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">
                                            <input name="gender" type="radio" value="Male">Male
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">
                                            <input name="gender" type="radio" value="Female">Female
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input name="email" class="input--style-4" type="email" id="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input name="Phone" class="input--style-4" type="text" id="phone">
                                </div>
                            </div>
                        </div>  
                        <div class="p-t-15">
                            <button onclick="" class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <video autoplay muted loop>
        <source src="video.mp4" >
    </video>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    
</body>
</form>
</html>
<?php
$con = mysqli_connect('localhost', 'root', '','db_connect');

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$Phone = $_POST['Phone'];



$sql = "INSERT INTO `tbl_contact` (`ID`, `First Name`, `Last Name`, `Date of Birth`, `Gender`, `Email`, `Phone Number`) VALUES ('0', '$Fname', '$Lname', '$DOB', '$gender', '$email', '$Phone')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Have Been Recorded";
}

?>