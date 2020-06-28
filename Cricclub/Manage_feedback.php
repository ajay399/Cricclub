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
                            <h4 class="tittle-w3-agileits mb-4">Manage Employee</h4>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover" class="table2">
                                    <thead>
                                        <tr><th>Feedback Id</th>
												<th>E-mail</th>
												<th>Feedback</th>
												<th>Delete Record</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
										$sel="select * from feedback";
										$exe=$conn->query($sel);

										while($fetch=$exe->fetch_object())
										{
											?>


										<tr>
										<td><?php echo $fetch->fid?></td>
										<td><?php echo $fetch->email?></td>
										<td><?php echo $fetch->response?></td>
										
										<td><a href="delete.php?delete2=<?php echo $fetch->fid?>"><img src="delete.png" height="35px"
										width="30px"></a>
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