<?php
include('header.php');




if(isset($_REQUEST['edit']))
{
	$tid=$_REQUEST['edit'];
	echo $tid;
	$sel="select * from tournament where tid='$tid'";
	$exe=$conn->query($sel);
	$fetch=$exe->fetch_object();
	
	if(isset($_REQUEST['submit']))
	{
		
	$type=$_REQUEST["matchtype"];
	$date=$_REQUEST["matchdate"];
	$firstteam=$_REQUEST["firstteam"];
	$secondteam=$_REQUEST["secondteam"];
	$matchlocation=$_REQUEST["matchlocation"];
	$price=$_REQUEST["price"];
	
	$upd="update tournament set type='$type',date='$date',firstteam='$firstteam',secondteam='$secondteam',location='$matchlocation',price='$price' where tid='$tid'";
	
	$exe=$conn->query($upd);
	if($exe)
		echo "<script>window.location='managetmt.php'</script>";
	else
		echo "Something Went Wrong";
}
}
	


?>
<head>
<style>
.abc
{
	display:none;
}
</style>

            

            <!-- Forms content -->
            <section class="forms-section">

                
              

                       
                
                <!-- Forms-4 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Update Tournament</h4>
                    <div class="row validform">
                        
                        <div class="col-md-8 order-md-1 validform2">
                            <h4 class="mb-3">Tournament Details</h4>
                            <form  action="#" method="post" class="needs-validation" novalidate="">
							
                                
                                    <label for="email">Tournament Type :</label>
                                    <select name="matchtype" class="form-control" required>
									<option>---Select Type--</option>
									<option value="ONE DAY MATCH">One Day</option>
									<option value="TEST MACTH">Test match</option>
									<option value="T-20 MATCH">T-20</option>
									</select><br><br>
									
                                    
								
                                    <label for="email">Date & Time :
                                        
                                    </label>
                                    <input type="datetime-local" value="<?php echo $fetch->date?>" class="form-control" name="matchdate" required>
									<br><br>
                                    
                                

                                
                                    <label for="email">Match :
                                        
                                    </label>
                                    <select name="firstteam" class="form-control" required>
									
<option value="INDIA">India</option>
<option value="NEW ZEALAND">New Zealand</option>
<option value="PAKISTAN">Pakistan</option>
<option value="AUSTRALIA">Australia</option>
<option value="WEST INDIES">West Indies</option>
<option value="SOUTH AFRICA">South Africa</option>
</select>&nbsp;&nbsp;&nbsp;VS&nbsp;&nbsp;&nbsp;


<select name="secondteam" class="form-control" required>	
<option value="PAKISTAN">Pakistan</option>							
<option value="INDIA">India</option>
<option value="NEW ZEALAND">New Zealand</option>

<option value="AUSTRALIA">Australia</option>
<option value="WEST INDIES">West Indies</option>
<option value="SOUTH AFRICA">South Africa</option>
</select>
</select><br><br>


<label for="email">Price(Rs.):
                                        
                                    </label>
                                    <input type="text" value=<?php echo $fetch->price?> class="form-control" maxlength="4" minlength="4" name="price" required>
									<br><br>

                                

                                
                                    <label for="address">Match Location :</label>
                                    <select name="matchlocation" class="form-control" required>
<option>---Select Location--</option>									
<option value="Oval : London">Oval : London</option>
<option value="Melbourne : Australia(Sydney)">Melbourne : Australia(Sydney)</option>
<option value="HPCA : India(Dharamshala)">HPCA : India(Dharamshala)</option>
<option value="Galle : Sri Lanka">Galle : Sri Lanka</option>
<option value="Eden Gardens : India(Kolkata)">Eden Gardens : India(Kolkata)</option>

                                
								<br><br>

                                
                                    
                                    <input type="text" class="abc">
                                

                                

                                
                                
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn"  name="submit" type="submit">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--// Forms-4 -->
            </section>

            <!--// Forms content -->

           <?php
include('footer.php');
?>