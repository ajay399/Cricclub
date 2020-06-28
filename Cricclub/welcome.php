<?php

include('navbar.php');
?>

<!doctype html>
<html lang="en">
  <head>
  
  <style>
  .book
  {
	  background-color:slateblue;
	  color:white;
	  font-size:24px;
	  
	  
  }
  
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
	<title>Cricclub | Live Score | Book Tickets</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <br><br>
  <h2><center>Upcoming Matches</center></h2>
  <hr></hr>
  <?php
  $sel="select * from tournament";
  $exe=$conn->query($sel);
  while($fetch=$exe->fetch_object())
  {
	  ?>
	  
  
  <table cellpadding="5">
  <tr> <td><?php echo $fetch->firstteam?> VS</td></tr>
  <tr><td><?php echo $fetch->secondteam?></td></tr>
  <tr><td><?php echo $fetch->date?></td></tr>
  <tr><td>Ground : <?php echo $fetch->location?></td></tr>
  <tr><td><input type="submit" value="Buy Tickets" name="book" class="book"></td></tr>
  </table>
  <hr>
  <?php
  }
  ?>
  
  </body>
</html>