<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

$conn=new mysqli('localhost','id10554301_abc','ajay123','id10554301_cricclub');
session_start();

if(isset($_REQUEST['login']))
{
	
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$sel="select * from reg where email='$email' and password='$password' and status='Unblock'";
	$sel2="select * from admin where anm='$email' and pass='$password'";
	$exe=$conn->query($sel);
	$exe2=$conn->query($sel2);
	$fetch=$exe->fetch_object();
	
	
	
	
	   
	   
	   if($exe)
	   {
	                       
							$chk=$exe->num_rows;
							if($chk==1)
							{
								
								
								
							if(isset($_REQUEST['rem']))
							{
								
								setcookie('email',$email,time()+30);
								setcookie('password',$password,time()+30);
								
								
							}
						   $cid=$fetch->cid;
	                       $email=$fetch->fullname;
		
							$_SESSION['uid']=$cid;
							$_SESSION['user']=$email;
		
							header('location:userside/web/index.php');
		
							}
	
	                         else{
								 echo "<script>alert('Invalid Details');</script>";
								 }
								 }
	   
	   
	   if($exe2)
		   
		   
		   {    $fetch2=$exe2->fetch_object();
			   $chk2=$exe2->num_rows;
			   
					if($chk2==1)
				{
					
					  if(isset($_REQUEST['rem']))
								{
									
									setcookie('email',$email,time()+30);
									setcookie('password',$password,time()+30);
								}
		             $adminid=$fetch2->aid;
	                 $aemail=$fetch2->anm;
					$_SESSION['uid2']=$adminid;
					$_SESSION['user2']=$aemail;
		
					header('location:dashboard.php');
		
				}
				
	 	   
	
		                else{echo "<script>alert('Invalid Details');</script>";
						}}
		   
		   
		   
		   
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Login :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Login</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email'];}?>" class="form-control" placeholder="Enter email" required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password'];}?>" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                            <input type="checkbox" name="rem" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="forgot col-md-6 text-sm-right text-center">
                 
                        </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Don't have an account
                    <a href="userside/web/reg.php">Create an account</a>
                </p>
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="index.php">Back to Home</a>
                </h1>
            </div>

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2019 Cricclub . All Rights Reserved | Website By Ajay Rabari
                    
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>