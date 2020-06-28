<?php





include('header.php');

$user=$_SESSION['user'];
$sel="select * from reg where fullname='$user'";
$exe=$conn->query($sel);
$fetch=$exe->fetch_object();
$id=$fetch->cid;


if(isset($_REQUEST['buy']))
{
   $tid=$_REQUEST['buy'];
   $_SESSION['tid']=$tid;
  $sel="select * from tournament where tid='$tid'";
  $exe=$conn->query($sel);
  $fetch=$exe->fetch_object();
}





						if(isset($_REQUEST['pay']))
				{
	
							
							$tidf=$_SESSION['tid'];
							echo "tournament id is".$tidf;
							echo "customer id is : ".$id;
							$qtyf=$_SESSION['qty'];
							echo "qty : ".$qtyf;
							$amtf=$_SESSION['amt'];
							echo "amount : ".$amtf;
							
							echo $ins="insert into orders(cid,tid,qty,AMOUNT) values('$id','$tidf','$qtyf','$amtf')";
							$exe=$conn->query($ins);
							if($exe)
							{
								
                                    header('location:message.php');
							}

								
							
							else
							{
								echo "Fail";
							}
							
	
	
				}

?>


<head>
<style>

.order
{
	
	
	background-color:blue;
	color:white;
	font-size:24px;
	
	
	
	
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head> 


<script>
var x=500;

<!--ticket function-->
jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
	
	
		
	
});


</script>
<br>


<center><h3>Tournament Details</h3></center>
<hr><br>




<center>
  <h2><?php echo $fetch->firstteam?> VS<br/>
  <?php echo $fetch->secondteam?></h2></br>
  <h3><?php echo $fetch->date?></br>
  Price(Rs.) <?Php echo $fetch->price?>/- Only<br>
  Ground : <?php echo $fetch->location?></br><br/>
 </h3></br>
 
 <!-- Ticket Form-->
 Ticket : <form id='myform' method='POST' action='#'>
    <input type='button' value='-' class='qtyminus' field='quantity' />
    <input type='text' name='quantity' value='0' class='qty' />
    <input type='button' value='+' class='qtyplus' field='quantity' /><br><br>
	<input type="submit" class="order" value="Generate Bill" name="final">
	<br><br>

  <br><br><br>
  
  <?php
  
  
  	if(isset($_REQUEST['final']))
{
  
  if(isset($_REQUEST['quantity']))
  {
	  
	  $q=$_REQUEST['quantity'];
	  $_SESSION['qty']=$q;
	  $amt=$fetch->price;
	  echo "------------------------------------------------------------Bill Details------------------------------------------------------"."<br/>";
	  echo "<br/>";
	  echo "Total Tickets : ".$q."<br/>";
	  $amt2=$q*$amt;
	  $_SESSION['amt']=$amt2;
	  echo "Your Total Amount Is : ".$amt2."<br/>";
	  echo "<br/>";
	  echo "------------------------------------------------------------Bill Details------------------------------------------------------"."<br/>";
	 
        ?>
    

<br><br><h2><a href="buy.php?pay=<?php echo $fetch->tid?>">Payment</a></h2><br><br>
<?php	
	  
	      
  }
	 

}
  
  
  
  ?>
 


<br><br>


<h1>






</h1>
</form>
   
</form>
  </center>
  <hr>



<br><br>

<?php

include('footer.php');


?>