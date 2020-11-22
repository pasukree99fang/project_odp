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
                        <h3 class="box-title">Create Sub Department </h3>

                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-info dropdown-toggle fa fa-book" data-toggle="dropdown"> Create Sub Department 
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="_createdepartment.php">Create Department</a></li>
                                <li><a href="_createsubdepartment.php">Create Sub department</a></li>
                                <li><a href="_createposition.php">Create Position</a></li>
                            </ul>
                        </div>

                        <!-- <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Create Sub Department
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

                    <?php $SQL1 = "SELECT a.us_company_id, a.us_username, a.us_firstname, 
                    b.cpn_id, b.cpn_name FROM tb_user a 
                    LEFT OUTER JOIN (SELECT * FROM tb_company) b ON (a.us_company_id=b.cpn_id)
                    WHERE us_username = '".$_SESSION['us_username']."'";
                    $objQuery1 = mysqli_query($mysqli,$SQL1);
                    $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC); ?>

                    <!-- form start -->
                    <form role="form" name="add_name" id="add_name">
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
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sub Department</label>
                                        <div class="input-group margin">
                                            <input type="text" class="form-control" id="CreateSub" name="CreateSub" placeholder="Enter Sub Department">
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
                            </div> -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sub Department</label>
                                        <table class="table" id="dynamic_field" border="0">
                                            <tr>
                                                <td><input type="text" name="name[]" placeholder="Enter Sub Department" class="form-control name_list" /></td>
                                                <td>
                                                    <span class="input-group-btn">
                                                        <button type="button" name="add" id="add" class="btn btn-info btn-flat">+</button>
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>


                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                        <button type="button" name="submit" id="submit" class="btn btn-primary pull-right fa fa-download" value="Save"> Save</botton>
                        </div>
                    </form>
            </div>
        </div>
</div>

<script>
$(document).ready(function(){
    var i=1;
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter Department" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button></td></tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
    
    $('#submit').click(function(){  
        console.log('#submit');
        $.ajax({
            url:"_managecreate_subdepartment.php",
            //url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });
    
});
</script>