<!DOCTYPE html>
<?php

session_start();

include_once('connection.php');

if(!$_SESSION['userName']){

header("location:index.php");

}



?>
<html>



<head>

    <meta charset="UTF-8">

    <title> Bucharest Bike-Rental Inventory - mountainb Devices</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->

    <!-- global css -->

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- font Awesome -->

    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />

    <link href="css/panel.css" rel="stylesheet" type="text/css"/>

    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>    

    <!-- end of global css -->    

    <!--page level css -->

    <link href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />

    <link href="css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" media="all" href="vendors/jvectormap/jquery-jvectormap.css" />

    <link rel="stylesheet" href="vendors/animate/animate.min.css">

    <link rel="stylesheet" href="css/only_dashboard.css" />

    <!--end of page level css-->

</head>



<body class="skin-josh">

    <header class="header">

        <a href="login_success.php" class="logo">

            <img src="img/logo.png" alt="Logo">

        </a>

    </header>

    <div class="wrapper row-offcanvas row-offcanvas-left">

        <!-- Left side column. contains the logo and sidebar -->

        <aside class="left-side sidebar-offcanvas">

            <section class="sidebar ">

                <div class="page-sidebar  sidebar-nav">

                    <div class="nav_icons" style="margin-top: 40px;">

                        <ul class="sidebar_threeicons">

                            <li>

                                <a href="form_builder.html">

                                    <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>

                                </a>

                            </li>

                            <li>

                                <a href="form_builder2.html">

                                    <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>

                                </a>

                            </li>

                            <li>

                                <a href="buttonbuilder.html">

                                    <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>

                                </a>

                            </li>

                            <li>

                                <a href="gridmanager.html">

                                    <i class="livicon" data-name="new-window" title="Page Builder" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>

                                </a>

                            </li>

                        </ul>

                    </div>

                    <div class="clearfix"></div>

                    <!-- BEGIN SIDEBAR MENU -->

                    <ul id="menu" class="page-sidebar-menu">

                        <li>

                            <a href="login_success.php">

                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>

                                <span class="title">Dashboard</span>

                            </a>

                        </li>

                        <li class="active">

                            <a href="#">

                                <i class="livicon" data-name="globe" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>

                                <span class="title">Bikes inventory</span>

                                <span class="fa arrow"></span>

                            </a>

                            <ul class="sub-menu">

                                <li class="active">

                                    <a href="mountainb.php">

                                        <i class="fa fa-angle-double-right"></i>

                                        mountainb

                                    </a>

                                </li>

                                <li>

                                    <a href="android.php">

                                        <i class="fa fa-angle-double-right"></i>

                                        Android

                                    </a>

                                </li>

                                <li>

                                    <a href="windows.php">

                                        <i class="fa fa-angle-double-right"></i>

                                        Windows phones and tablets

                                    </a>

                                </li>

                                <li>

                                    <a href="kindle.php">

                                        <i class="fa fa-angle-double-right"></i>

                                        Kindle

                                    </a>

                                </li>

                                <li>

                                    <a href="controllers.php">

                                        <i class="fa fa-angle-double-right"></i>

                                        mountainb & Android controllers / VR devices / SIM Cards

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="devicehistory.php">

                                <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>

                                <span class="badge badge-danger">!</span>

                                 Bikes Issue History

                            </a>

                        </li>

                        <li>

                            <a href="submitdevice.php">

                                <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>

                                Return Bike

                            </a>

                        </li>

                        <li>

                            <a href="transfer_bike.php">

                                <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>

                                <span class="title">Transfer a bike</span>

                            </a>

                        <li>

                            <a href="bikesissued.php">

                                <i class="livicon" data-name="flag" data-c="#418bca" data-hc="#418bca" data-size="18" data-loop="true"></i>

                                <span class="title">Bikes Issued</span>

                            </a>

                        </li>

                        <li>

                            <a href="imprumutate.php">

                                <i class="livicon" data-name="stopwatch" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>

                                <span class="title">Borrowed Bikes</span>

                            </a>

                        </li>

                    </ul>

                    <!-- END SIDEBAR MENU -->

                </div>

            </section>

            <!-- /.sidebar -->

        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->

        <aside class="right-side">

            <!-- Main content -->

            <section class="content-header">

                <h1 class="text-center">Bucharest Bike-Rental Inventory - mountainb <br /> Have a nice day !</h1>

                <ol class="breadcrumb">

                    <li class="active">

                        <a href="logout.php">

                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>

                            Logout

                        </a>

                    </li>

                </ol>

            </section>

            <section class="content">

                <div class="row">

                    <div class="col-lg-6 margin_10 animated fadeInDown">

    <!-- START TABEL DEV DISPONIBILE -->

<?php
include_once('connection.php');
$myQuery = 'SELECT * FROM bikeinventory WHERE category="mountainb" AND bikeID NOT IN (SELECT bikeID FROM bikesissued) ORDER BY bikeName';
$result = mysql_query($myQuery) or die($myQuery."<br/><br/>".mysql_error());



if(isset($_GET['homepage'])) {homepage();}

function homepage()
{
header("location:login_success.php");
}

echo "<h2 style=' text-align: center; font-family:Agency FB;color:#325bad;font-size:22px;'> &nbsp; The following bikes are available:</h2>";

echo "<table style='margin: 0px auto;' class='.table table-striped table-condensed table-bordered' >
<tr>
<th>Select</th>
<th>Owner</th>
<th>Category</th>
<th>Bike Name</th>
<th>Bar Code ID</th>
<th>Color</th>
</tr>";

echo "<form id=\"frm_mountainbList\" name=\"frm_mountainbList\" action = \"issue_device.php\" method=\"post\" onSubmit=\"Validate()\" >";

while($row = mysql_fetch_array($result)) {

  echo "<tr>";
  echo "<td align =\"middle\"><input type=\"checkbox\" name=\"check_list[]\" id=".$row['bikeID']." value=".$row['bikeID']." /></td>";
  echo "<td align = \"middle\">" . $row['owner'] . "</td>";
  echo "<td align = \"middle\">" . $row['category'] . "</td>";
  echo "<td>" . $row['bikeName'] . "</td>";
  echo "<td>" . $row['barCodeID'] . "</td>";
  echo "<td>" . $row['color'] . "</td>";
  echo "</tr>";
}

echo "</table>";
echo "</br>";

echo "<div class='text-center'>&nbsp;";
echo "<input id='submit_button4' class=\"btn btn-small btn-success\" type = \"submit\" value = \"Submit\" >";
echo "</div>";
echo "</form>";
echo "</br></br>";
?> 
<script>
var form = document.getElementById('frm_mountainbList');
form.onsubmit = Validate;

function validateForm() {
    var isValid = false,
        els = form.elements['check_list[]'];
        i;
    var c = document.getElementsByTagName('input');
    for (var i = 0; i < c.length; i++) {
        if (c[i].type == 'checkbox') {
            if (els[i].checked) {
                isValid = true;
            }
        }
    }
    if(isValid){
        document.getElementById("submit_button4").disabled=true;
    }
    return isValid;

}
function Validate()
{
    if(!validateForm())
    {
        alert("Kindly select at least one device");  
        return false;
    }
    return true;
}
</script>

</div>

<div class="col-lg-6 margin_10 animated fadeInDown">

<?php
    
echo "<h2 style='text-align: center; font-family:Agency Fb;color:#325bad;font-size:22px;'> The following bikes are currently rented:</h2>";

echo "<table style= 'margin: 0px auto;' class='.table table-striped table-condensed table-bordered'>
<tr>
<th>User Name</th>
<th>Category</th>
<th>Bike Name</th>
<th>Bar Code ID</th>
<th>Color</th>
<th>Time Stamp</th>
</tr>";


$newMyQuery= 'SELECT * FROM bikesissued di LEFT JOIN usercred uc ON di.userID = uc.userID WHERE 1 ORDER BY timeStamp DESC';
$newResult = mysql_query($newMyQuery) or die($newMyQuery."<br/><br/>".mysql_error());

while($row = mysql_fetch_array($newResult)) 
{
    $catQuery = 'SELECT * FROM bikeinventory WHERE category = "mountainb" AND bikeID = ' . $row['bikeID'];
    $catResult = mysql_query($catQuery) or die($catQuery."<br/><br/>".mysql_error());
    
    
    while ($cat = mysql_fetch_array($catResult))
    {
    
        echo "<tr>";
        // echo "<td align =\"middle\"><input type=\"checkbox\" name=\"check_list[]\" id=".$row['bikeID']." value=".$row['bikeID']." /></td>";
        // echo "<td align = \"middle\">" . $row['category'] . "</td>";
        echo "<td>" . $row['displayName'] . "</td>";
        echo "<td align = \"middle\">" . $cat['category'] . "</td>";
        echo "<td>" . $row['bikeName'] . "</td>";
        echo "<td>" . $cat['barCodeID'] . "</td>";
        echo "<td>" . $cat['color'] . "</td>";
        echo "<td>" . $row['timeStamp'] . "</td>";
        echo "</tr>";
    }
}
echo "</table>";
echo "</br>";
?>	

                    </div>

                </div>

                <!--/row-->

                

            </section>

        </aside>

        <!-- right-side -->

    </div>

    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">

        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>

    </a>

    <!-- global js -->

    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--livicons-->

    <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>

    <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>

   <script src="js/josh.js" type="text/javascript"></script>

    <script src="js/metisMenu.js" type="text/javascript"> </script>

    <script src="vendors/holder-master/holder.js" type="text/javascript"></script>

    <!-- end of global js -->

    <!-- begining of page level js -->

    <!--  todolist-->

    <script src="js/todolist.js"></script>

    <!-- EASY PIE CHART JS -->

    <script src="vendors/charts/easypiechart.min.js"></script>

    <script src="vendors/charts/jquery.easypiechart.min.js"></script>

    <!--for calendar-->

    <script src="vendors/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>

    <script src="vendors/fullcalendar/calendarcustom.min.js" type="text/javascript"></script>

    <!--   Realtime Server Load  -->

    <script src="vendors/charts/jquery.flot.min.js" type="text/javascript"></script>

    <script src="vendors/charts/jquery.flot.resize.min.js" type="text/javascript"></script>

    <!--Sparkline Chart-->

    <script src="vendors/charts/jquery.sparkline.js"></script>

    <!-- Back to Top-->

    <script type="text/javascript" src="vendors/countUp/countUp.js"></script>

    <!--   maps -->

    <script src="vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

    <script src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

     <script src="vendors/jscharts/Chart.js"></script>

    <script src="js/dashboard.js" type="text/javascript"></script>

    <script type="text/javascript">

    $(document).ready(function() {

        var composeHeight = $('#calendar').height() +21 - $('.adds').height();

        $('.list_of_items').slimScroll({

            color: '#A9B6BC',

            height: composeHeight + 'px',

            size: '5px'

        });

    });

    </script>

    <!-- end of page level js -->

  

</body>

</html>

