<?php include 'connectdb.php';?>
<?phpsession_start();?>

<div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Organization</h3>
                    </div>

                    <!-- DB tb_company -->
                    <?php $SQL1 = "SELECT a.us_company_id, a.us_username, a.us_firstname, 
                    b.cpn_id, b.cpn_name FROM tb_user a 
                    LEFT OUTER JOIN (SELECT * FROM tb_company) b ON (a.us_company_id=b.cpn_id)
                    WHERE us_username = '".$_SESSION['us_username']."'";
                    $objQuery1 = mysqli_query($mysqli,$SQL1);
                    $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC); ?>

                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="email" class="form-control" id="cpn_name" name="cpn_name" placeholder="<?php echo $objResult1['cpn_name']; ?>" disabled>
                                    </div>
                                </div>
                            </div>    

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department</label>
                                        <input type="username" class="form-control" id="CreateDepartment" name="CreateDepartment" placeholder="Enter Department">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sub Department</label>
                                        <input type="Firstname" class="form-control" id="CreateSub" name="CreateSub" placeholder="Enter Sub Department">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Position</label>
                                        <input type="Firstname" class="form-control" id="CreatePosition" name="CreatePosition" placeholder="Enter Position">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
</div>