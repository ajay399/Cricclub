<?php

include('navbar.php');

if(isset($_REQUEST['send']))
{
	
	$email=$_REQUEST['email'];
	$res=$_REQUEST['response'];
	
	
	$ins="insert into feedback(email,response)values('$email','$res')";
	$exe=$conn->query($ins);
	if($exe)
	{
		header('location:welcome.php');
	}
	else
	{
		echo "error";
	}
	
	
}
	
	
	

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Feedback Form</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <form method="post" enctype="multipart/form-data">
  <table align="center" style="width:50%;">
  <tr><td><div class="form-group" >
    <label for="exampleInputEmail1">Your E-mail</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your E-mail" required>
    </div></td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Write Response</label>
    <input type="type" name="response" class="form-control" id="exampleInputPassword1" placeholder="Enter your feedback" required>
  </div>
  
  </td></tr>
  <tr><td colspan="2" align="center">
  <button type="submit" name="send" class="btn btn-primary">Send</button>
  </td></tr>
  </table>
</form>
 
  
  
  </body>
</html>