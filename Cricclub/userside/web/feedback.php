<?php

include('header.php');


if(isset($_REQUEST['send']))
{
	
	$email=$_REQUEST['email'];
	$res=$_REQUEST['response'];
	
	
	$ins="insert into feedback(email,response)values('$email','$res')";
	$exe=$conn->query($ins);
	if($exe)
	{
		header('location:index.php');
	}
	else
	{
		echo "error";
	}
	
	
}

?>

<br><br><br>
<center><h2>Please, Let us know how we did !</h2></center><br><br>

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
 

<?php

include('footer.php');

?>