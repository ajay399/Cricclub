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
                                <table class="table table-hover">
                                    <thead>
                                        <tr><th>Customer Id</th>
												<th>Full Name</th>
												<th>E-mail</th>
												<th>Phone</th>
												<th>Password</th>
												<th>Profile</th>
												<th>Delete Record</th>
												<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
										$sel="select * from reg";
										$exe=$conn->query($sel);

										while($fetch=$exe->fetch_object())
										{
											?>


										<tr>
										<td><?php echo $fetch->cid?></td>
										<td><?php echo $fetch->fullname?></td>
										<td><?php echo $fetch->email?></td>
										<td><?php echo $fetch->phone?></td>
										<td><?php echo $fetch->password?></td>
										<td><img src="userside/web/filestore/<?php echo $fetch->file?>" height="40px" width="40px"></td>
										<td>
										<a href="delete.php?delete=<?php echo $fetch->cid?>"><img src="delete.png" height="35px"
										width="30px"></a>
										</td>
										<td><a class="status" href="status.php?status=<?php echo $fetch->cid?>"><?php echo $fetch->status ?></a>
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