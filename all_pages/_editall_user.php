<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include 'connectdb.php';?>
<?php
  $strSQL = "SELECT * FROM tb_form_element";
  $objQuery = mysqli_query($mysqli,$strSQL);
?>

<div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit User "<?php echo $_SESSION['us_firstname']; ?> <?php echo $_SESSION['us_lastname']; ?> "</h3>
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
                                        <input type="hidden" class="form-control" id="cpn_id" name="cpn_id" value="<?php echo $objResult1['cpn_id']; ?>">
                                        <input type="text" class="form-control" id="cpn_name" name="cpn_name" value="<?php echo $objResult1['cpn_name']; ?>" disabled>
                                    </div>
                                </div>
                            </div>    

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" class="form-control" id="UsernameUser" name="UsernameUser" placeholder="<?php echo $_SESSION['us_username']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">New Username</label>
                                        <input type="text" class="form-control" id="UsernameUser" name="UsernameUser" placeholder="Enter New Username">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="text" class="form-control" id="PasswordUser" name="PasswordUser" placeholder="<?php echo $_SESSION['us_password']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">New Password</label>
                                        <input type="text" class="form-control" id="PasswordUser" name="PasswordUser" placeholder="Enter New Password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Firstname</label>
                                        <input type="text" class="form-control" id="FirstnameUser" name="FirstnameUser" placeholder="<?php echo $_SESSION['us_firstname']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">New Firstname</label>
                                        <input type="text" class="form-control" id="FirstnameUser" name="FirstnameUser" placeholder="Enter New Firstname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lastname</label>
                                        <input type="text" class="form-control" id="LastnameUser" name="LastnameUser" placeholder="<?php echo $_SESSION['us_lastname']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">New Lastname</label>
                                        <input type="text" class="form-control" id="LastnameUser" name="LastnameUser" placeholder="Enter New Lastname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" id="EmailUser" name="EmailUser" placeholder="<?php echo $_SESSION['us_email']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">New Email</label>
                                        <input type="text" class="form-control" id="EmailUser" name="EmailUser" placeholder="Enter New Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password For Approve</label>
                                        <input type="text" class="form-control" id="PasswordForApprove" name="PasswordForApprove" placeholder="<?php echo $_SESSION['us_password_approve']; ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">New Password For Approve</label>
                                        <input type="text" class="form-control" id="PasswordForApprove" name="PasswordForApprove" placeholder="Enter New Password For Approve">
                                    </div>
                                </div>
                            </div>

                            <!-- stepnum -->
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">You Are Admin</label>
                                        <input type="text" class="form-control" id="IsAdminUser" name="IsAdminUser" placeholder="<?php echo $_SESSION['us_isadmin']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>You Are Admin</label>
                                        <select class="form-control select2" style="width: 100%;" name="IsAdminUser">
                                            <option value="" selected disabled>Choose Yes/No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">You Are Approval</label>
                                        <input type="text" class="form-control" id="IsApprovalUser" name="IsApprovalUser" placeholder="<?php echo $_SESSION['us_isapproval']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>You Are Approval</label>
                                        <select class="form-control select2" style="width: 100%;" name="IsApprovalUser">
                                            <option value="" selected disabled>Choose Yes/No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="row">

                                <!-- dpm -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department</label>
                                        <input type="text" class="form-control" id="DepartmentUser" name="DepartmentUser" placeholder="<?php echo $_SESSION['us_firstname']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>New Department</label>
                                        <?php
                                            $strSQL2 = "SELECT * FROM tb_department";
                                            $objQuery2 = mysqli_query($mysqli,$strSQL2);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="DepartmentUser">
                                            <option value="" selected disabled>Choose Department</option>
                                            <?php
                                                while($objResult2 = mysqli_fetch_array($objQuery2))
                                                { ?>
                                                <option value="<?php echo $objResult2['dpm_id']; ?>"><?php echo $objResult2['dpm_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- sub_dpm -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sub Department</label>
                                        <input type="text" class="form-control" id="SubDepartmentUser" name="SubDepartmentUser" placeholder="<?php echo $_SESSION['us_firstname']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>New Sub Department</label>
                                        <?php
                                            $strSQL3 = "SELECT * FROM tb_sub_department";
                                            $objQuery3 = mysqli_query($mysqli,$strSQL3);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="SubDepartmentUser">
                                            <option value="" selected disabled>Choose Sub Department</option>
                                            <?php
                                                while($objResult3 = mysqli_fetch_array($objQuery3))
                                                { ?>
                                                <option value="<?php echo $objResult3['sub_id']; ?>"><?php echo $objResult3['sub_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- pos -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Position</label>
                                        <input type="text" class="form-control" id="PositionUser" name="PositionUser" placeholder="<?php echo $_SESSION['us_firstname']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>New Position</label>
                                        <?php
                                            $strSQL = "SELECT * FROM tb_position";
                                            $objQuery = mysqli_query($mysqli,$strSQL);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="PositionUser">
                                            <option value="" selected disabled>Choose Position</option>
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

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>New Profile picture</label>
                                        <input type="file" id="InputfileUser" name="InputfileUser">
                                        <p class="help-block">Select employee avatar.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">You Are Manager</label>
                                        <input type="text" class="form-control" id="chkmanager" name="chkmanager" placeholder="<?php echo $_SESSION['us_isapproval']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>You Are Manager</label>
                                        <select class="form-control select2" style="width: 100%;" name="chkmanager">
                                            <option value="" selected disabled>Choose Yes/No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right fa fa-download"> Save</button>
                        </div>
                    </form>
            </div>
        </div>
</div>