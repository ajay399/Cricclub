<?php

include('header.php');


$fullname=$_SESSION['user'];
$sel="select * from reg where fullname='$fullname'";
$exe=$conn->query($sel);
$fetch=$exe->fetch_object(); 
?>  

<style>
  td
  {
	  
	  text-align:center;
	  
  }
  </style>
  <br>
  
  <table class="table table-hover" align="center">
    <tr><td>Your Name :</td> <td><?php echo $fetch->fullname?></td></tr>
	<tr><td>E-mail :</td> <td><?php echo $fetch->email?></td></tr>
	<tr><td>Phone :</td> <td><?php echo $fetch->phone?></td></tr>
	<tr><td>Password :</td> <td><?php echo $fetch->password?></td></tr>
	<tr><td>Your Profile :</td> <td><img src="filestore/<?php echo $fetch->file?>" height="50px" width="100px"></td></tr>
    <tr>
	<td colspan="2" align="center">
<a  class="edit" href="edit.php?edit=<?php echo $fetch->cid?>">EDIT</a>
</td></td>
</td></tr>

</table>





<?php

include('footer.php');

?>