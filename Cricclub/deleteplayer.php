<?php
$conn=new mysqli('localhost','id10554301_abc','ajay123','id10554301_cricclub');



if(isset($_REQUEST['delete']))
{
	 $pid=$_REQUEST['delete'];
	$sel="select * from player where tid='$pid'";
	$exe2=$conn->query($sel);
	$fetch=$exe2->fetch_object();
	$img=$fetch->file;
	
	$cid=$_REQUEST['delete'];
	$del="delete from player where pid=$pid";
	$exe=$conn->query($del);
	
	
	if($exe)
		
		{
		
			
			
			header('location:manageplayers.php');
		}
		
		
}