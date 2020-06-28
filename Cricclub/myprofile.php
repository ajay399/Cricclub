<!doctype html>
<html lang="en">
  <head>
  
  <style>
  td
  {
	  
	  text-align:center;
  }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cric Club | My Profile</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  
 <?php
 include('navbar.php');
   
$fullname=$_SESSION['user'];
$sel="select * from reg where fullname='$fullname'";
$exe=$conn->query($sel);
$fetch=$exe->fetch_object(); 
?>  
  
  <table class="table table-hover">
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
  
  </body>
</html>