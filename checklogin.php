<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="devicetracking"; // Database name
$tbl_name="usercred"; // Table name
?>
<html>
<head>
    <title>Fail - Ubisoft QC Login | DEMO</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="css/pages/login2.css" rel="stylesheet" />
    <link href="vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />
    <!-- styles of the page ends-->
</head>
<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Bike Rental Sign In</h3>
                    </div>
                    <div class="panel-body">

                        <form name="form1" method="post" action="checklogin.php">

                            <fieldset>

                                <div class="form-group input-group">

                                    <div class="input-group-addon">

                                        <i class="livicon" data-name="at" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>

                                    </div>

                                    <input class="form-control"  name="userName" type="text" id="userName"/>

                                </div>

                                <div class="form-group input-group">

                                    <div class="input-group-addon">

                                        <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>

                                    </div>

                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" id="password"/>

                                </div>

                                <div class="form-group">

                                    <label>
<?php
// Connect to server and select databse.
mysql_connect($host, "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form
$myusername=$_POST['userName'];
$mypassword=$_POST['password'];
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE userName='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$row=mysql_fetch_row($result);
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['userName'] = $row[1]; //$row['userName']
$_SESSION['userID'] = $row[0];
header("location:login_success.php");
}
else {
echo "<h2 class='text-center' style='font-family:Agency FB;color:#325bad;font-size:20px;'>Wrong Username or Password. Login Again!</h2>";
}
?>

                                    </label>

                                </div>

                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="Submit" value="Login">

                            </fieldset>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- global js -->

    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--livicons-->

    <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>

    <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>

    <!-- end of global js -->

    <!-- begining of page level js-->

    <script src="js/TweenLite.min.js"></script>

    <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>

    <script type="text/javascript">

    $(document).ready(function() {

        $(document).mousemove(function(event) {

            TweenLite.to($('body'), .5, {css:{'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"}});

        });



        //Flat red color scheme for iCheck

        $('input[type="checkbox"].minimal-blue').iCheck({

            checkboxClass: 'icheckbox_minimal-blue'

        });

    });

    </script>

    <!-- end of page level js-->

</body>

</html>