<?php

include('header.php');




if(isset($_REQUEST['submit']))
{

$fullname=$_REQUEST['fullname'];
		$email=$_REQUEST['email'];
		$phone=$_REQUEST['phone'];
		$password=$_REQUEST['password'];
		$confirmpassword=$_REQUEST['confirmpassword'];
		$file1=$_FILES['file1']['name'];
		$path='filestore/'.$file1;
		$tmp_file=$_FILES['file1']['tmp_name'];
		move_uploaded_file($tmp_file,$path);
		
		
		$ins="insert into reg(fullname,email,phone,password,confirmpassword,file)
		values('$fullname','$email','$phone','$password','$confirmpassword','$file1')";
		
		
		
		$exe=$conn->query($ins);
		if($exe)
		{
			echo "Data inserted";
			header('location:../../index.php');
		}
		else
		{
			echo "Not inserted";
			
		}
		
		
	}

?>

<br>

<form method="post" enctype="multipart/form-data">
  <table align="center" style="width:50%;">
  <tr><td><div class="form-group" >
    <label for="exampleInputEmail1">Your Full Name</label>
    <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
    </div></td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">E-Mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter E-mail" required>
  </div>
  </div>
  </td></tr>
  
  <tr><td><div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" maxlength="10" minlength="10" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone" required>
  </div>
  </td></tr>
  
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
  </div>
  </td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="Re-Enter Password" required>
  </div>
  </td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Profile Picture</label>
    <input type="file" name="file1" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </td></tr>
  
  <tr><td colspan="2" align="center">
  <button type="submit" name="submit" class="btn btn-primary">Register</button>
  </td></tr>
  </table>
</form>


<?php
include('footer.php');
?>

</body>
</html>

