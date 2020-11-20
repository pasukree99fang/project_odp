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
                        <h3 class="box-title">Create Position </h3>

                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-info dropdown-toggle fa fa-book" data-toggle="dropdown"> Create Position 
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="_createdepartment.php">Create Department</a></li>
                                <li><a href="_createsubdepartment.php">Create Sub department</a></li>
                                <li><a href="_createposition.php">Create Position</a></li>
                            </ul>
                        </div>

                        <!-- <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Create Position
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="_createdepartment.php">Create Department</a></li>
                                <li><a href="_createsubdepartment.php">Create Sub department</a></li>
                                <li><a href="_createposition.php">Create Position</a></li>
                            </ul>
                        </div> -->
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
                                        <input type="text" class="form-control" id="cpn_name" name="cpn_name" placeholder="<?php echo $objResult1['cpn_name']; ?>" disabled>
                                        <input type="hidden" name="cpn_id" placeholder="<?php echo$objResult1["cpn_id"]; ?>">
                                    </div>
                                </div>
                            </div>    

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Department</label>
                                        <?php
                                            $strSQL3 = "SELECT * FROM tb_sub_department";
                                            $objQuery3 = mysqli_query($mysqli,$strSQL3);
                                        ?>
                                        <select class="form-control select2" style="width: 100%;" name="sub">
                                            <option selected="selected">Choose Sub Department</option>
                                            <?php
                                                while($objResult3 = mysqli_fetch_array($objQuery3))
                                                { ?>
                                                <option value="<?php echo $objResult3['sub_id']; ?>"><?php echo $objResult3['sub_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Position</label>
                                        <div class="input-group margin">
                                            <input type="text" class="form-control" id="CreatePosition" name="CreatePosition" placeholder="Enter Position">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info btn-flat">+</button>
                                            </span>
                                        </div>

                                        <div class="input-group margin">
                                            <input type="text" class="form-control" id="CreateDepartment1" name="CreateDepartment1" placeholder="Enter Department">
                                            <span class="input-group-btn">
                                                <button type="button" id="btnPluz" class="btn btn-info btn-danger">x</button>
                                            </span>
                                        </div>
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