<?php

include('navbar.php');



if(isset($_REQUEST['edit']))
{
	
	$cid=$_REQUEST['edit'];
	$sel="select * from reg where cid='$cid'";
	$exe=$conn->query($sel);
	$fetch=$exe->fetch_object();
	$img=$fetch->file;

	

	if(isset($_REQUEST['save']))
	{
		
		
		$fullname=$_REQUEST["fullname"];
		$email=$_REQUEST["email"];
		$phone=$_REQUEST["phone"];
		$password=$_REQUEST["password"];
		$file1=$_FILES['file1']['name'];
		$path='filestore/'.$file1;
		$tmp_file=$_FILES['file1']['tmp_name'];
		move_uploaded_file($tmp_file,$path);
		
		if($_FILES['file1']['size']>0)
		{
			$upd="update reg set fullname='$fullname',email='$email',phone='$phone',password='$password',file='$file1' where cid='$cid'";
		$exe=$conn->query($upd);
		              if($exe)
			
			{
				$_SESSION['user']=$fullname;
				unlink('filestore/'.$img);
				header('location:myprofile.php');
			}
			else
			{
				
				echo "no";
			}
			
		}
		
		else
		{
			
			
		
		$upd="update reg set fullname='$fullname',email='$email',phone='$phone',password='$password' where cid='$cid'";
		$exe=$conn->query($upd);
		if($exe)
			
			{
				$_SESSION['user']=$fullname;
				header('location:abc.php');
			}
			else
			{
				
				echo "no";
			}
	}
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

    <title>Cricclub | Edit Profile</title>
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
    <label for="exampleInputEmail1">Your Full Name</label>
    <input type="text" name="fullname" value="<?php echo $fetch->fullname?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
    </div></td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">E-Mail</label>
    <input type="email" name="email" value="<?php echo $fetch->email?>" class="form-control" id="exampleInputPassword1" placeholder="Enter E-mail" required>
  </div>
  </div>
  </td></tr>
  
  <tr><td><div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" maxlength="10" minlength="10" value="<?php echo $fetch->phone?>" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone" required>
  </div>
  </td></tr>
  
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="password" value="<?php echo $fetch->password?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
  </div>
  </td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="text" name="confirmpassword" value="<?php echo $fetch->confirmpassword?>" class="form-control" id="exampleInputPassword1" placeholder="Re-Enter Password" required>
  </div>
  </td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Your Profile</label>
   <tr><td> <img src="filestore/<?php echo $fetch->file?>" height="100px" width="100px">
  </div>
  </td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Profile Picture</label>
    <input type="file" name="file1" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </td></tr>
  
  <tr><td colspan="2" align="center">
  <button type="submit" name="save" class="btn btn-primary">Save</button>
  </td></tr>
  </table>
</form>
  
  
  </body>
</html>