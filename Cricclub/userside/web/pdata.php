<style>
td{
	
	text-align:center;
	
}
table
{
	
	color:black;
}
</style>

<?php

include('header.php');



if(isset($_REQUEST['playerdata']))
	
	{
		
		$id=$_REQUEST['playerdata'];
		$sel="select * from player where pid='$id'";
		$exe=$conn->query($sel);
		$fetch=$exe->fetch_object();
		
	}
	
	?>
	<br><br>
	<center><h2>Details Of <?php echo $fetch->fullname?>.</h2></center>
	<hr>
	
	<table class="table table-hover" align="center">
	<tr><td>Full Name :</td><td><?php echo $fetch->fullname?></td></tr>
	<tr><td>Player Type :</td><td><?php echo $fetch->playertype?></td></tr>
	<tr><td>Position :</td><td><?php echo $fetch->pos?></td></tr>
	<tr><td>Wickets :</td><td><?php echo $fetch->wickets?></td></tr>
	<tr><td>Hatrics :</td><td><?php echo $fetch->hatrics?></td></tr>
	<tr><td>Wickets By Wicket Keeping :</td><td><?php echo $fetch->ww?></td></tr>
	<tr><td>Total ODI Run</td><td><?php echo $fetch->totalrun?></td></tr>
	<tr><td>Centuries</td><td><?php echo $fetch->centuries?></td></tr>
	<tr><td>Half Centuries</td><td><?php echo $fetch->halfc?></td></tr>
	</table>
	
	<hr>


<?php

include('footer.php');

?>