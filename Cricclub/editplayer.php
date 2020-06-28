<?php
include('header.php');
$conn=new mysqli('localhost','id10554301_abc','ajay123','id10554301_cricclub');

if(isset($_REQUEST['edit']))
											{
												$pid=$_REQUEST['edit'];
										$sel="select * from player where pid='$pid'";
										$exe=$conn->query($sel);

										$fetch=$exe->fetch_object();
										echo "Fetch Successful";
											}
											


?>

<style>
td,th
{
	text-align:center;
}
</style>


            

            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="work-progres">
                            <h4 class="tittle-w3-agileits mb-4">Manage Players</h4>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr><th>Player Id</th>
												<th>Full Name</th>
												<th>Player Type</th>
												<th>Position</th>
												<th>Wickets</th>
												<th>Hatrics</th>
												<th>Wicket By Wicket Keeping</th>
												<th>Total Runs</th>
												<th>Centuries</th>
												<th>Half Centuries</th>
												
												
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        


										<tr>
										<td><?php echo $fetch->pid?></td>
										<td><?php echo $fetch->fullname?></td>
										<td><?php echo $fetch->playertype?></td>
										<td><?php echo $fetch->pos?></td>
										<td><?php echo $fetch->wickets?></td>
										<td><?php echo $fetch->hatrics?></td>
										<td><?php echo $fetch->ww?></td>
										<td><?php echo $fetch->totalrun?></td>
										<td><?php echo $fetch->centuries?></td>
										<td><?php echo $fetch->halfc?></td>
										
										
										
										</tr>


						
                                        </tr>
                                        
                                    </tbody>
                                </table>
								<a href="editp.php?editp=<?php echo $fetch->pid?>">Edit</a>
								<hr>
								<br>
								
								<center><h2> Edit Details Of <?php echo $fetch->fullname?></h2></center>
								
								
								
								
								<!--update form-->
								
								
								
            <!--// Three-grids -->
            
           <?php
include('footer.php');
?>