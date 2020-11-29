<?php include 'connectdb.php';?>
<?phpsession_start();?>

<div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Department </h3>
                    </div>
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <?php
                                            $strSQL2 = "SELECT * FROM tb_department";
                                            $objQuery2 = mysqli_query($mysqli,$strSQL2);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" id="dpm" name="dpm">
                                            <option value="" selected disabled>Choose Department</option>
                                            <?php
                                                while($objResult2 = mysqli_fetch_array($objQuery2))
                                                { ?>
                                                <option value="<?php echo $objResult2['dpm_name']; ?>"><?php echo $objResult2['dpm_name']; ?></option>
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Edit Department</label>
                                            <input type="text" class="form-control" id="dpmname" name="dpmname" placeholder="Enter New Department">
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-default"><a href="_all_organization_architecture.php">Back</a></button>
                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                        </div>
                    </form>
            </div>
        </div>
</div>