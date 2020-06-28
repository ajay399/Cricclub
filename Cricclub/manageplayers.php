<?php
include('header.php');
$conn=new mysqli('localhost','id10554301_abc','ajay123','id10554301_cricclub');
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
												<th>Delete Record</th>
												<th>Edit Record</th>
												
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
										$sel="select * from player";
										$exe=$conn->query($sel);

										while($fetch=$exe->fetch_object())
										{
											?>


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
										
										<td><a href="deleteplayer.php?delete=<?php echo $fetch->pid?>"><img src="delete.png" height="35px"
										width="30px"></a>
										</td>
										<td>
										<a href="editplayer.php?edit=<?php echo $fetch->pid?>">Edit</a>
										</td>
										
										</tr>


										<?php


										}

										?>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--// Stats -->
                   
                </div>
            </div>
            

            <!--// three-grids -->
            <div class="container-fluid">
                <div class="row">
                   
                </div>
            </div>
            <!--// Three-grids -->
            
           <?php
include('footer.php');
?>