<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
 include 'connectdb.php';
 if ($_SESSION['us_username'] == null){
  echo "<script>alert('กรุณาเข้าสู่ระบบ'); window.location.href='../login.html';</script>";
 }
?>
<?php
  $strSQL = "SELECT * FROM tb_form_element";
  $objQuery = mysqli_query($mysqli,$strSQL);
?>

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
                                        <input type="hidden" class="form-control" id="cpn_id" name="cpn_id" value="<?php echo $objResult1['cpn_id']; ?>">
                                        <input type="text" class="form-control" id="cpn_name" name="cpn_name" value="<?php echo $objResult1['cpn_name']; ?>" disabled>
                                    </div>
                                </div>
                            </div>    

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" class="form-control" id="UsernameUser" name="UsernameUser" placeholder="Enter Username">
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
                                        <input type="text" class="form-control" id="FirstnameUser" name="FirstnameUser" placeholder="Enter Firstname">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lastname</label>
                                        <input type="text" class="form-control" id="LastnameUser" name="LastnameUser" placeholder="Enter Lastname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" id="EmailUser" name="EmailUser" placeholder="Enter Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password For Approve</label>
                                        <input type="text" class="form-control" id="PasswordForApprove" name="PasswordForApprove" placeholder="Enter Password For Approve">
                                    </div>
                                </div>
                            </div>
                            <!-- stepnum -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Give permission to be admin</label>
                                        <select class="form-control select2" style="width: 100%;" name="IsAdminUser">
                                            <option value="" selected disabled>Choose Yes/No</option>
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
                                            <option value="" selected disabled>Choose Yes/No</option>
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
                                        <select class="form-control select2" style="width: 100%;" name="dp_us" id="dp_us">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Department</label>
                                        <select class="form-control" name="sub_dp" id="sub_dp">
                                            <option value="" selected disabled>Choose Department</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- pos -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <select class="form-control" name="pos" id="pos">
                                            <option value="" selected disabled>Choose Department</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Profile picture</label>
                                        <input type="file" id="InputfileUser" name="InputfileUser">
                                        <p class="help-block">Select employee avatar.</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label for="chkmanager">
                                            <input type="checkbox" id="chkmanager" name="chkmanager" value="1">
                                            Checkbox in case of user who is manager
                                        </label>
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
<script type="text/javascript">
    $('#dp_us').on('change',function(){
        var dp_id = $(this).val();
        //console.log(dp_id);
        if(dp_id){
          //console.log('เข้า ajax '+brand);
            $.ajax({
                type:'POST',
                url:'ajax_create_user.php',
                data:'depart='+dp_id,
                success:function(html){
                    //console.log('เข้า success '+html);
                    $('#sub_dp').html(html);
                    //$('#n_product').html(html);
                    $('#pos').html('<option value="" selected disabled>Choose Sub Department</option>');
                }
            }); 
        }else{
            $('#pos').html('<option value="" selected disabled>No!</option>');
            //$('#reservation').html('<option value="" selected disabled>ไม่พบรุ่นรถ</option>');
        }
      });

      $('#sub_dp').on('change',function(){
        var sub_dp = $(this).val();
        //console.log(sub_dp);
        if(sub_dp){
          //console.log('เข้า ajax '+brand);
            $.ajax({
                type:'POST',
                url:'ajax_create_user.php',
                data:'sub_dpid='+sub_dp,
                success:function(html){
                    //console.log('เข้า success '+html);
                    $('#pos').html(html);
                }
            }); 
        }else{
            $('#pos').html('<option value="" selected disabled>No Data!</option>');
        }
      });
</script>