<!DOCTYPE html>

<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Chow Poly Pomona - Signup</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        div {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body role="document">

    <script src="facebooksdk.js"></script>

<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Chow Poly Pomona</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a>
                    </li>
                    <li><a href="deal.html">Today's Deal</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Orders<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="orders.html">Past Orders</a>
                            </li>
                            <li><a href="orders.html">Current Orders</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <h2>Sign up</h2>
        <form role="form">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me</label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">Receive newsletters</label>
            </div>
            <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true"></div>
            <div class="page-header">
                <button type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>
            </div>
        </form>

    </div>



<?php     
Include('connect.php'); //database connection

$servername = "localhost";
$username = "harddrop";
$password="ZzYTffCAO9R";       
$database="tutelage";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$emailreg = $_REQUEST['email'];
$usernamereg = $_REQUEST['name'];
$password = $_REQUEST['pwd'];

if (isset($_REQUEST['submit']))
{

	if($_REQUEST['email']=="" || $_REQUEST['pwd']=="" || $_REQUEST['name']=="")
	{
	echo "Error: All fields must be filled!";
	}
	else
	{
$sql = "INSERT INTO customer (fname, lname, email, password, newsletter)
VALUES ('$usernamereg', '$usernamereg', '$emailreg', '$password', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
}
?>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=421429148023171&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
