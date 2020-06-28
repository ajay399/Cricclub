<?php
include('header.php');
$conn=new mysqli('localhost','id10554301_abc','ajay123','id10554301_cricclub');

if(isset($_REQUEST['editp']))
											{
												$pid=$_REQUEST['editp'];
										$sel="select * from player where pid='$pid'";
										$exe=$conn->query($sel);

										$fetch=$exe->fetch_object();
										echo "Fetch Successful";
										
if(isset($_REQUEST['save']))
{
	
	echo "here";
	$fullname=$_REQUEST['fname'];
	$playertype=$_REQUEST['playertype'];
	$pos=$_REQUEST['pos'];
	$wickets=$_REQUEST['wickets'];
	$hatrics=$_REQUEST['hatrics'];
	$ww=$_REQUEST['ww'];
	$totalrun=$_REQUEST['totalrun'];
	$centuries=$_REQUEST['centuries'];
	$halfc=$_REQUEST['halfc'];
	
	$fullname.$playertype.$pos.$wickets.$hatrics.$ww.$totalrun.$centuries.$halfc;
	
	
	$upd="update player set fullname='$fullname',playertype='$playertype',pos='$pos',wickets='$wickets',hatrics='$hatrics',ww='$ww',totalrun='$totalrun',centuries='$centuries',halfc='$halfc' where pid='$pid'";
	
	$exe=$conn->query($upd);
if($exe)
{

echo "<script>window.location='manageplayers.php'</script>";
	
}
else
{
	echo "Error";
}
	
	
}
										
										
											}
											


?>

<style>
td,th
{
	text-align:center;
}
</style>

<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Update Player Details & Statastics</h4>
                    <div class="row validform">
                        
                        <div class="col-md-8 order-md-1 validform2">
                            <h4 class="mb-3">Player Details</h4>
                            <form  action="#" method="post" class="needs-validation" novalidate="">
                                
								 <label for="email">Player's Full Name</label>
                                        
                                    </label>
                                    <input type="text" value="<?php echo $fetch->fullname?>" name="fname" class="form-control" id="email">

								<br>
								<label for="lastName">Player Type : </label>
                                        <select name="playertype" class="form-control" required>
									<option>---Select Type--</option>
									<option value="Bowler : Spinner">Bowler : Spinner</option>
<option value="Bowler : Faster">Bowler : Faster</option>
<option value="Batsman : Left Handed">Batsman : Left Handed</option>
<option value="Batsman : Right Handed">Batsman : Right Handed</option>
<option value="All rounder">All rounder</option>
<option value="Wicket Keeper">Wicket Keeper</option>
									</select><br><br><br>

                                <div class="mb-3">
                                    <label for="username">Player Position : </label>
									
                                    <select name="pos" class="form-control">
<option>---Select Type--</option>
<option value="Captain">Captain</option>
<option value="Vice-Captain">Vice-Captain</option>
<option value="Player">player</option>
</select>
                                </div><br>

                                <div class="mb-3">
                                    <label for="email">Wickets : </label>
                                        
                                    </label>
                                    <input type="text" value="<?php echo $fetch->wickets?>" name="wickets" class="form-control" id="email">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address">Hatrics : </label>
                                    <input type="text" value=<?php echo $fetch->hatrics?> name="hatrics" class="form-control" id="address" required="">
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address2">Wickets By Wicketkeeping : 
                                        
                                    </label>
                                    <input type="text" value=<?php echo $fetch->ww?> name="ww" class="form-control" id="address">
                                </div>
								
								<div class="mb-3">
                                    <label for="address2">Total Runs : 
                                        
                                    </label>
                                    <input type="text" value=<?php echo $fetch->totalrun?> name="totalrun" class="form-control" id="address">
                                </div>
								
								<div class="mb-3">
                                    <label for="address2">100s(Centuries): 
                                        
                                    </label>
                                    <input type="text" value=<?php echo $fetch->centuries?> name="centuries" class="form-control" id="address">
                                </div>
								
								<div class="mb-3">
                                    <label for="address2">50s(Half Centuries): 
                                       
                                    </label>
                                    <input type="text" value=<?php echo $fetch->halfc?> name="halfc" class="form-control" id="address">
                                </div>

                                
                                
                                
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" name="save" type="submit">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--// Forms-4 -->
            </section>

            <!--


            

            					
								
								<!--update form-->
								
								
								
            <!--// Three-grids -->
            
           <?php
include('footer.php');
?>