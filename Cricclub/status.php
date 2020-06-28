<?php

$conn=new mysqli('localhost','id10554301_abc','ajay123','id10554301_cricclub');

if(isset($_REQUEST['status']))
{
	
	
	
	$cid=$_REQUEST['status'];
	echo $cid;
	$sel="select * from reg where cid='$cid'";
	$exe=$conn->query($sel);
	$fetch=$exe->fetch_object();
	$status=$fetch->status;
	
	
	if($status=="Block")
	{
		
		
		$update="update reg set status='Unblock' where cid=$cid";
		$exe=$conn->query($update);
		if($exe)
			
			{
				
				header('location:dashboard.php');
			}
			
			else
				
			
			{
				echo "no";
				
			}
	}
	
	
	else
	{
		
	
		$update="update reg set status='Block' where cid=$cid";
		$exe=$conn->query($update);
		if($exe)
			
			{
				
				header('location:dashboard.php');
			}
			
			else
				
			
			{
				echo "no";
				
			}
		
}}
?>