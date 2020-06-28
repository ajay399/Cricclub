<?php
include('header.php');
?>
<br>
<center><h2>View Player Details</h2></center>
<hr>
<br>
<br>

<?php
  
  $sel="select * from player";
  $exe=$conn->query($sel);
  
  while($fetch=$exe->fetch_object())
  {
	  ?>
	  
	  <center><h2><a href="pdata.php?playerdata=<?php echo $fetch->pid?>"><?php echo $fetch->fullname?></a>
	</h2></center>
	<hr>
	  
	  
	  
	  <?php
  }
  ?>
  




<?php
include('footer.php');
?>