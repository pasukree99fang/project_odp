<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include 'connectdb.php';?>


<div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit User </h3>
                    </div>


                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <select class="form-control select2" style="width: 100%;" id="username" name="username">
                                            <option value="" selected disabled>Choose Username</option>
                                            <?php
                                                $strSQL = "SELECT * FROM tb_user";
                                                $objQuery = mysqli_query($mysqli,$strSQL);
                                                while($objResult = mysqli_fetch_array($objQuery))
                                                { ?>
                                                <option value="<?php echo $objResult["us_username"]; ?>"><?php echo $objResult["us_username"]; ?></option>
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Edit Username</label>
                                            <input type="text" class="form-control" id="upusername" name="upusername" placeholder="Enter New Username">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Firstname</label>
                                        <select class="form-control select2" style="width: 100%;" id="firstname" name="firstname">
                                            <option value="" selected disabled>Choose Firstname</option>
                                            <?php
                                                $strSQL1 = "SELECT * FROM tb_user";
                                                $objQuery1 = mysqli_query($mysqli,$strSQL1);
                                                while($objResult1 = mysqli_fetch_array($objQuery1))
                                                { ?>
                                                <option value="<?php echo $objResult1["us_firstname"]; ?>"><?php echo $objResult1["us_firstname"]; ?></option>
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Edit Firstname</label>
                                            <input type="text" class="form-control" id="upfirstname" name="upfirstname" placeholder="Enter New Firstname">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <select class="form-control select2" style="width: 100%;" id="lastname" name="lastname">
                                            <option value="" selected disabled>Choose Lastname</option>
                                            <?php
                                                $strSQL2 = "SELECT * FROM tb_user";
                                                $objQuery2 = mysqli_query($mysqli,$strSQL2);
                                                while($objResult2 = mysqli_fetch_array($objQuery2))
                                                { ?>
                                                <option value="<?php echo $objResult2["us_lastname"]; ?>"><?php echo $objResult2["us_lastname"]; ?></option>
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Edit Lastname</label>
                                            <input type="text" class="form-control" id="uplastname" name="uplastname" placeholder="Enter New Lastname">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <select class="form-control select2" style="width: 100%;" id="email" name="email">
                                            <option value="" selected disabled>Choose Email</option>
                                            <?php
                                                $strSQL3 = "SELECT * FROM tb_user";
                                                $objQuery3 = mysqli_query($mysqli,$strSQL3);
                                                while($objResult3 = mysqli_fetch_array($objQuery3))
                                                { ?>
                                                <option value="<?php echo $objResult3["us_email"]; ?>"><?php echo $objResult3["us_email"]; ?></option>
                                            <?php } ?>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Edit Email</label>
                                            <input type="text" class="form-control" id="upemail" name="upemail" placeholder="Enter New Email">
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-default"><a href="_alluser.php">Back</a></button>
                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                        </div>
                    </form>
            </div>
        </div>
</div>