<?php

include('header.php');
$sel="select * from tournament";
$exe=$conn->query($sel);
if($exe)
	echo "yes";
else
	echo "no";

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
                            <h4 class="tittle-w3-agileits mb-4">Manage Tournament</h4>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
												<th>T ID</th>
												<th>Type</th>
												<th>First Team</th>
												<th>Second Team</th>
												<th>Date & Time</th>
												<th>Location</th>
												<th>Price(Rs./-)</th>
												<th>Delete</th>
												<th>Edit</th>
												
												
												
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
									while($fetch=$exe->fetch_object())
									{
										?>
                                        <tr>
										<td><?php echo $fetch->tid?></td>
										<td><?php echo $fetch->type?></td>
										<td><?php echo $fetch->date?></td>
										<td><?php echo $fetch->firstteam?></td>
										<td><?php echo $fetch->secondteam?></td>
										<td><?php echo $fetch->location?></td>
										<td><?php echo $fetch->price?></td>
                                           


										
										
										<td><a href="deletetmt.php?delete=<?php echo $fetch->tid?>"><img src="delete.png" height="35px"
										width="30px"></a>
										</td>
										<td>
										<a href="edittmt.php?edit=<?php echo $fetch->tid?>">Edit</a>
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