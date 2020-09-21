<?php include 'connectdb.php';?>
<?phpsession_start();?>
<?php
  $strSQL = "SELECT * FROM tb_form_element";
  $objQuery = mysqli_query($mysqli,$strSQL);
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="2YOU" disabled>
                                    </div>
                                </div>
                            </div>    

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Firstname</label>
                                        <input type="Firstname" class="form-control" id="exampleInputEmail1" placeholder="Enter Firstname">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lastname</label>
                                        <input type="Lastname" class="form-control" id="exampleInputEmail1" placeholder="Enter Lastname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="Email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password For Approve</label>
                                        <input type="Lastname" class="form-control" id="exampleInputEmail1" placeholder="Enter Password For Approve">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Give permission to be admin</label>
                                        <select class="form-control select2" style="width: 100%;" name="stepnum">
                                            <option selected="selected">Choose Yes/No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Give permission to be approval</label>
                                        <select class="form-control select2" style="width: 100%;" name="stepnum">
                                            <option selected="selected">Choose Yes/No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <?php
                                            $strSQL2 = "SELECT * FROM tb_department";
                                            $objQuery2 = mysqli_query($mysqli,$strSQL2);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="dpm">
                                            <option selected="selected">Choose Department</option>
                                            <?php
                                                while($objResult2 = mysqli_fetch_array($objQuery2))
                                                { ?>
                                                <option value="<?php echo $objResult2['dpm_id']; ?>"><?php echo $objResult2['dpm_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Department</label>
                                        <?php
                                            $strSQL3 = "SELECT * FROM tb_sub_department";
                                            $objQuery3 = mysqli_query($mysqli,$strSQL3);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="sub_dpm">
                                            <option selected="selected">Choose Sub Department</option>
                                            <?php
                                                while($objResult3 = mysqli_fetch_array($objQuery3))
                                                { ?>
                                                <option value="<?php echo $objResult3['sub_id']; ?>"><?php echo $objResult3['sub_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <?php
                                            $strSQL = "SELECT * FROM tb_position";
                                            $objQuery = mysqli_query($mysqli,$strSQL);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="pos">
                                            <option selected="selected">Choose Position</option>
                                            <?php
                                                while($objResult = mysqli_fetch_array($objQuery))
                                                { ?>
                                                <option value="<?php echo $objResult['pst_id'] ?>"><?php echo $objResult['pst_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Profile picture</label>
                                        <input type="file" id="inputfile" name="inputfile">
                                        <p class="help-block">Select employee avatar.</p>
                                    </div>
                                </div>
                            </div>

                            


                            

                            <!-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">

                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div> -->
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
</div>