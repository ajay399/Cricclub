<?php
$conn=new mysqli('localhost','id10554301_abc','ajay123','id10554301_cricclub');



if(isset($_REQUEST['delete']))
{
	
	$tid=$_REQUEST['delete'];
	$del="delete from tournament where tid=$tid";
	$exe=$conn->query($del);
	
	
	if($exe)
		
		{
		
			
			
			header('location:managetmt.php');
		}
		
		
}