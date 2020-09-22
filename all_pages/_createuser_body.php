<?php include 'connectdb.php';?>
<?phpsession_start();?>
<!-- <?php
  $strSQL = "SELECT * FROM tb_form_element";
  $objQuery = mysqli_query($mysqli,$strSQL);
?> -->

<div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create User</h3>
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
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="username" class="form-control" id="UsernameUser" name="UsernameUser" placeholder="Enter Username">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="text" class="form-control" id="PasswordUser" name="PasswordUser" placeholder="Enter Password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Firstname</label>
                                        <input type="Firstname" class="form-control" id="FirstnameUser" name="FirstnameUser" placeholder="Enter Firstname">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lastname</label>
                                        <input type="Lastname" class="form-control" id="LastnameUser" name="LastnameUser" placeholder="Enter Lastname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="Email" class="form-control" id="EmailUser" name="EmailUser" placeholder="Enter Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password For Approve</label>
                                        <input type="Lastname" class="form-control" id="PasswordForApprove" name="PasswordForApprove" placeholder="Enter Password For Approve">
                                    </div>
                                </div>
                            </div>
                            <!-- stepnum -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Give permission to be admin</label>
                                        <select class="form-control select2" style="width: 100%;" name="IsAdminUser">
                                            <option selected="selected">Choose Yes/No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- stepnum -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Give permission to be approval</label>
                                        <select class="form-control select2" style="width: 100%;" name="IsApprovalUser">
                                            <option selected="selected">Choose Yes/No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- dpm -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <?php
                                            $strSQL2 = "SELECT * FROM tb_department";
                                            $objQuery2 = mysqli_query($mysqli,$strSQL2);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="DepartmentUser">
                                            <option selected="selected">Choose Department</option>
                                            <?php
                                                while($objResult2 = mysqli_fetch_array($objQuery2))
                                                { ?>
                                                <option value="<?php echo $objResult2['dpm_id']; ?>"><?php echo $objResult2['dpm_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- sub_dpm -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Department</label>
                                        <?php
                                            $strSQL3 = "SELECT * FROM tb_sub_department";
                                            $objQuery3 = mysqli_query($mysqli,$strSQL3);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="SubDepartmentUser">
                                            <option selected="selected">Choose Sub Department</option>
                                            <?php
                                                while($objResult3 = mysqli_fetch_array($objQuery3))
                                                { ?>
                                                <option value="<?php echo $objResult3['sub_id']; ?>"><?php echo $objResult3['sub_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- pos -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <?php
                                            $strSQL = "SELECT * FROM tb_position";
                                            $objQuery = mysqli_query($mysqli,$strSQL);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="PositionUser">
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
                                        <input type="file" id="InputfileUser" name="InputfileUser">
                                        <p class="help-block">Select employee avatar.</p>
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