<?php
include('header.php');


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
				header('location:myprofile.php');
			}
			else
			{
				
				echo "no";
			}
	}
	}
	
	
	
	
	
}	



?>

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
  


<?php
include('footer.php');



?>