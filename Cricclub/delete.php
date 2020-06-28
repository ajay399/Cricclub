<?php
$conn=new mysqli('localhost','id10554301_abc','ajay123','id10554301_cricclub');



if(isset($_REQUEST['delete']))
{
	 $cid=$_REQUEST['delete'];
	$sel="select * from reg where cid='$cid'";
	$exe2=$conn->query($sel);
	$fetch=$exe2->fetch_object();
	$img=$fetch->file;
	
	$cid=$_REQUEST['delete'];
	$del="delete from reg where cid=$cid";
	$exe=$conn->query($del);
	
	
	if($exe)
		
		{
		
			
			unlink('pic/'.$img);
			header('location:dashboard.php');
		}
		
		
}


if(isset($_REQUEST['delete2']))
{
	
	echo "delete is having value";
	echo $_REQUEST['delete2'];
	$fid=$_REQUEST['delete2'];
	$del2="delete from feedback where fid=$fid";
	$exe2=$conn->query($del2);
	
	if($exe2)
		
		{
			
		
			echo "<script>alert('Record Deleted Succesfully');</script>";
			
			
			header('location:dashboard.php');
		}
		
		
}
	

?>