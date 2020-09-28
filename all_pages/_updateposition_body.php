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
                                    <label>Position</label>
                                    <?php
                                    $strSQL = "SELECT * FROM tb_position";
                                    $objQuery = mysqli_query($mysqli,$strSQL);
                                    ?>
                                    <select class="form-control select2" style="width: 100%;" name="pst">
                                    <option value="" selected disabled>Choose Position</option>
                                    <?php
                                        while($objResult = mysqli_fetch_array($objQuery))
                                        { ?>
                                    <option value="<?php echo $objResult['pst_name'] ?>"><?php echo $objResult['pst_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Edit Position</label>
                                            <input type="text" class="form-control" id="pstname" name="pstname" placeholder="Enter New Position">
                                        
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