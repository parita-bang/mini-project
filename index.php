<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flora</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

	<style type="text/css">
	/* Gradient 1 for <input>*/
.tb1 {
	background-image:url(images/form_bg.jpg);
	background-repeat:repeat-x;
	border:1px solid #d1c7ac;
	width: 230px;
	color:#333333;
	padding:3px;
	margin-right:4px;
	margin-bottom:8px;
	/*font-family:tahoma, arial, sans-serif;*/
	font-family: "times new roman", times, serif;
  font-size: 20px;
  /*color: #000000;*/
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-align: left;
  letter-spacing: -0.4px;
  line-height: 19px;
}
/* for <button>*/

.testbutton {
  font-family: 'times new roman';
  font-weight: bold;
  color: #212423 !important;
  font-size: 16px;
  text-shadow: 1px 1px 0px #CADEDB;
  box-shadow: 1px 1px 1px #BEE2F9;
  padding: 10px 25px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: 2px solid #1C3352;
  background: #63B8EE;
  background: linear-gradient(top,  #7D818A,  #CFCFCF);
  background: -ms-linear-gradient(top,  #7D818A,  #CFCFCF);
  background: -webkit-gradient(linear, left top, left bottom, from(#7D818A), to(#CFCFCF));
  background: -moz-linear-gradient(top,  #7D818A,  #CFCFCF);
}
.testbutton:hover {
  color: #14396A !important;
  background: #468CCF;
  background: linear-gradient(top,  #C5D9ED,  #B7C2C4);
  background: -ms-linear-gradient(top,  #C5D9ED,  #B7C2C4);
  background: -webkit-gradient(linear, left top, left bottom, from(#C5D9ED), to(#B7C2C4));
  background: -moz-linear-gradient(top,  #C5D9ED,  #B7C2C4);
}
	</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image:url(Images/flora2.jpg)">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image:url(Images/flora3.jpg)">
                    <div class="carousel-caption d-none d-md-block">
                       
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image:url(Images/animation1.jpg)">
                    <div class="carousel-caption d-none d-md-block">
                       
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            
            <form action="index.php" method="post" name="form_info">
            <table align="center">
            	<tr>
                	
                    <td><input type="text" name="txtname" id="txtname" class="tb1" placeholder="Name" required/></td>
                     <td><p id="demoName"></p></td>
                </tr>
                <tr>
                	
                    <td><input type="text" name="txtemail" id="txtmail" class="tb1" placeholder="E-mail" required/></td>
                    <td><p id="demoEmail"></p></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtnumber" class="tb1" placeholder="Contact No" id="txtnumber" required/></td>
                    <td><p id="demoNo"></p></td>
                </tr>
                <tr>
                	
                    <td colspan="2" align="center"><input type="submit" name="Submit" class="testbutton"/>
                    <input type="reset" name="Reset" class="testbutton"/></td>
                </tr>
               
            </table>
            </form>
        </div>
    </section>
  
  
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; www.teambang.com 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
<?php
	$name=$_POST["txtname"];  
    $email=$_POST["txtemail"];
	$cno=$_POST["txtnumber"];
	
if(!empty($name) && !empty($email) && !empty($cno))
{

	$link = mysql_connect("localhost", "root","Bang2017!");
	mysql_select_db("contact_info",$link);
	$sql = "INSERT INTO information(name,email,contactno) VALUES ('$name','$email',$cno)";
	mysql_query($sql);
	echo "ID of last inserted record is: " . mysql_insert_id();
}

?>

</body>
</html>
