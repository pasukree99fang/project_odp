<?php include 'connectdb.php';?>
<?phpsession_start();?>

<div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Department </h3>

                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-info dropdown-toggle fa fa-book" data-toggle="dropdown"> Create Department 
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="_createdepartment.php">Create Department</a></li>
                                <li><a href="_createsubdepartment.php">Create Sub department</a></li>
                                <li><a href="_createposition.php">Create Position</a></li>
                            </ul> 
                        </div>

                        <!-- <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Create Department
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="_createdepartment.php">Create Department</a></li>
                                <li><a href="_createsubdepartment.php">Create Sub department</a></li>
                                <li><a href="_createposition.php">Create Position</a></li>
                            </ul>
                        </div> -->

                    </div>

                    <!-- <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table id="myTbl" width="650" border="1" cellspacing="2" cellpadding="0">
                                    <tr class="firstTr">
                                    <input type="text" class="text_data" name="data2[]" id="data2[]" value="" />
                                    <input name="h_item_id[]" type="hidden" id="h_item_id[]" value="" />
                                    <input name="h_all_id_data" type="hidden" id="h_all_id_data" value="<?=$all_id_data?>" />
                                </div>
                            </div>
                    </div> -->

                    <script>
                        $(function(){

                            $("#studentID").keypress(function (e) {
                                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                                            return false;
                                }
                            });

                            
                            $('#btnPluz').click(function(){
                                var num=parseInt($('#number').val())+1;
                                //alert(num);
                                var tr=$("<div class='input-group margin'><input type='text' class='form-control' id='CreateDepartment"+num+"' name='CreateDepartment"+num+"' placeholder='Enter Department'><span class='input-group-btn'><button type='button' id='btnDel' rel='"+num+"' class='btn btn-info btn-danger'>x</button></span></div>");
                                $('#addRow tr:first').before(tr);
                                $('#number').val(num);
                                $("#studentID").keypress(function (e) {
                                        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                                        return false;
                                        }
                                });
                            });


                            $('#addRow').on('click','#btnDel',function(){
                                var num=parseInt($('#number').val())-1;
                                var rel=$(this).attr('rel');
                                var rowCount = $('#addRow>tr').length;
                                var i=rowCount;
                                $('#number').val(num);
                                $("#tr"+rel+"").remove();
                                $('#addRow span').each(function(index, element) {
                                    --i
                                    $(this).text(i);
                                });
                            });

                        });

                    </script>

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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department</label>
                                            <span class="input-group-btn">
                                                <button type="button" id="btnPluz" class="btn btn-info btn-flat">+</button>
                                            </span>
                                            <!-- <div class="col-md-6"> -->
                                        <div class="input-group margin">
                                            <input type="text" class="form-control" id="CreateDepartment1" name="CreateDepartment1" placeholder="Enter Department">
                                            
                                        </div>
                                        <!-- </div> -->

                                        <!-- <div class="input-group margin">
                                            <input type="text" class="form-control" id="CreateDepartment1" name="CreateDepartment1" placeholder="Enter Department">
                                            <span class="input-group-btn">
                                                <button type="button" id="btnPluz" class="btn btn-info btn-danger">x</button>
                                            </span>
                                        </div> -->
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

<!-- <div class='input-group margin'><input type='text' class='form-control' id='CreateDepartment"+num+"' name='CreateDepartment"+num+"' placeholder='Enter Department'><span class='input-group-btn'><button type='button' id='btnDel' rel='"+num+"' class='btn btn-info btn-danger'>x</button></span></div> -->