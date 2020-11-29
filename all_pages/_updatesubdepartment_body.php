<?php include 'connectdb.php';?>
<?phpsession_start();?>

<div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Sub Department </h3>
                    </div>


                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sub Department</label>
                                    <?php
                                        $strSQL3 = "SELECT * FROM tb_sub_department"; 
                                        $objQuery3 = mysqli_query($mysqli,$strSQL3);
                                    ?>
                                    <select class="form-control select2" style="width: 100%;" name="sub" id="sub">
                                        <option value="" selected disabled>Choose Sub Department</option>
                                        <?php
                                            while($objResult3 = mysqli_fetch_array($objQuery3))
                                            { ?>
                                            <option value="<?php echo $objResult3['sub_name']; ?>"><?php echo $objResult3['sub_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Edit Sub Department</label>
                                            <input type="text" class="form-control" id="subname" name="subname" placeholder="Enter New Sub Department">
                                        
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