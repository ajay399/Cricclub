<?php
include('header.php');
if(isset($_REQUEST['submit']))
{
	$fullname=$_REQUEST['fname'];
	$playertype=$_REQUEST['playertype'];
	$pos=$_REQUEST['pos'];
	$wicket=$_REQUEST['wicket'];
	$totalruns=$_REQUEST['totalruns'];
	$ww=$_REQUEST['ww'];
	$hatrics=$_REQUEST['hatrics'];
	$hundred=$_REQUEST['hundred'];
	$half=$_REQUEST['half'];
	
	$ins="insert into player(fullname,playertype,pos,wickets,hatrics,ww,totalrun,centuries,halfc) 
	values('$fullname','$playertype','$pos','$wicket','$hatrics','$ww','$totalruns','$hundred','$half')";
	$exe=$conn->query($ins);
	if($exe)
		echo "Player Uploaded";
	else
		echo "Something Went Wrong";
	
	
	
}
?>

            

            <!-- Forms content -->
            <section class="forms-section">

                
              

                       
                
                <!-- Forms-4 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Upload Player Details & Statastics</h4>
                    <div class="row validform">
                        
                        <div class="col-md-8 order-md-1 validform2">
                            <h4 class="mb-3">Player Details</h4>
                            <form  action="#" method="post" class="needs-validation" novalidate="">
                                
								 <label for="email">Player's Full Name</label>
                                        
                                    </label>
                                    <input type="text" name="fname" class="form-control" id="email">

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
                                    <input type="text" name="wicket" class="form-control" id="email">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address">Hatrics : </label>
                                    <input type="text" name="hatrics" class="form-control" id="address" required="">
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address2">Wickets By Wicketkeeping : 
                                        
                                    </label>
                                    <input type="text"name="ww" class="form-control" id="address">
                                </div>
								
								<div class="mb-3">
                                    <label for="address2">Total Runs : 
                                        
                                    </label>
                                    <input type="text" name="totalruns" class="form-control" id="address">
                                </div>
								
								<div class="mb-3">
                                    <label for="address2">100s(Centuries): 
                                        
                                    </label>
                                    <input type="text" name="hundred" class="form-control" id="address">
                                </div>
								
								<div class="mb-3">
                                    <label for="address2">50s(Half Centuries): 
                                       
                                    </label>
                                    <input type="text" name="half" class="form-control" id="address">
                                </div>

                                
                                
                                
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" name="submit" type="submit">Upload Player</button>
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