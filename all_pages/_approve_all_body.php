<?php
                  $us_aprad=$_SESSION['us_id'];
                  $strSQL = "
                  SELECT * FROM tb_user where us_id = '$us_aprad'";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                  $row = mysqli_fetch_array($objQuery); 
if($row['us_isadmin']=='no'){
?>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Approved</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search"> -->

                  <!-- <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
                </div>
              </div>
            </div> 
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                <tr>
                  <th><div align="center">Document</div></th>
                  <th><div align="center">User</div></th>
                  <th><div align="center">Date</div></th>
                  <th><div align="center">Level 1</div></th>
                  <th><div align="center">Level 2</div></th>
                  <th><div align="center">Level 3</div></th>
                  <!-- <th><div align="center">Reason</div></th> -->
                  <th><div align="center">View Document</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $_month_name = array("01"=>"ม.ค.",  "02"=>"ก.พ.",  "03"=>"มี.ค.","04"=>"เม.ย.",  "05"=>"พ.ค.",  "06"=>"มิ.ย.","07"=>"ก.ค.",  "08"=>"ส.ค.",  "09"=>"ก.ย.","10"=>"ต.ค.", "11"=>"พ.ย.",  "12"=>"ธ.ค.");
                $us_apr=$_SESSION['us_id'];
                  $strSQL = "
                  SELECT * FROM tb_user where us_id = '$us_apr'";
                  $objQuery = mysqli_query($mysqli,$strSQL);
                  $row = mysqli_fetch_array($objQuery);
                $po_us=$row['us_id'];
                $strs = "
                  SELECT * FROM tb_user";
                  $ress = mysqli_query($mysqli,$strs);
                $sql="select * from tb_status_send where doc_lv1 = '$po_us' or doc_lv2 = '$po_us' or doc_lv3 = '$po_us'";
                //$sql="select * from tb_status_send";
                    $res = mysqli_query($mysqli,$sql);
                  while($fetch = mysqli_fetch_array($res)){ 
                    $fetchs = mysqli_fetch_array($ress);
                    //echo $sql;
                    $CHK_BERG1 = substr($fetch['ss_date'],0,4)+543;$CHK_BERG2 = substr($fetch['ss_date'],5,2);$CHK_BERG3 = substr($fetch['ss_date'],8,2);
                    $CHK_BERG = $CHK_BERG3." &nbsp;". $_month_name[$CHK_BERG2]."&nbsp;".$CHK_BERG1;
                    //$docname=extract_int();
                ?>
                    <tr>

                      <td style="text-align: center"><?php echo $fetch['ss_docname']; ?></td>
                      <td style="text-align: center"><?php echo $fetch['ss_namesend']; ?></td>
                      <td style="text-align: center"><?php echo $CHK_BERG; ?></td>
                      <?php if($fetch['doc_aprlv1']=='pending'){ ?>
                      <!-- <td style="text-align: center"><?php echo $fetch['doc_lv1']; ?></td> -->
                      <td><div align="center"><span class="label label-warning">Pending</span></div></td>
                    <?php }else if($fetch['doc_aprlv1']=='approved'){ ?>
                      <td><div align="center"><span class="label label-success">Approved</span></div></td>
                    <?php }else if($fetch['doc_aprlv1']=='noapproved'){ ?>
                      <td><div align="center"><span class="label label-danger">Not-Approved</span></div></td>
                    <?php }else{ ?>
                      <td><div align="center">-</td>
                    <?php } ?>
                    <?php if($fetch['doc_aprlv2']=='pending'){ ?>
                      <!-- <td style="text-align: center"><?php echo $fetch['doc_lv1']; ?></td> -->
                      <td><div align="center"><span class="label label-warning">Pending</span></div></td>
                    <?php }else if($fetch['doc_aprlv2']=='approved'){ ?>
                      <td><div align="center"><span class="label label-success">Approved</span></div></td>
                    <?php }else if($fetch['doc_aprlv2']=='noapproved'){ ?>
                      <td><div align="center"><span class="label label-danger">Not-Approved</span></div></td>
                    <?php }else{ ?>
                      <td><div align="center">-</td>
                    <?php } ?>
                    <?php if($fetch['doc_aprlv3']=='pending'){ ?>
                      <!-- <td style="text-align: center"><?php echo $fetch['doc_lv1']; ?></td> -->
                      <td><div align="center"><span class="label label-warning">Pending</span></div></td>
                    <?php }else if($fetch['doc_aprlv3']=='approved'){ ?>
                      <td><div align="center"><span class="label label-success">Approved</span></div></td>
                    <?php }else if($fetch['doc_aprlv3']=='noapproved'){ ?>
                      <td><div align="center"><span class="label label-danger">Not-Approved</span></div></td>
                    <?php }else{ ?>
                      <td><div align="center">-</td>
                    <?php } ?>
                      <td style="text-align: center;">
                        <button type="button" class="btn btn-info  btn-primary fa fa-eye view_detail" data-toggle="modal" data-target="#modal-document" id="<?php echo "$fetch[ss_docname_id]"; ?>">
                          View
                        </button>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="modal fade" id="modal-document">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">รายละเอียดใบคำร้อง</h4>
        </div>
        <div class="modal-body" id="doc_detail">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ปิด</button>
          <!-- <div class="row">
            <div class="col-xs-6">
              <button type="button" class="btn btn-success" id="<?php echo "$fetch[ss_docname]"; ?>">อนุมัติ</button>
            </div>
            <div class="col-xs-6">
              <button type="button" class="btn btn-danger" id="<?php echo "$fetch[ss_docname]"; ?>">ไม่อนุมัติ</button>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php if($row['us_isadmin']=='yes'){ ?>
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Approved You is Admin</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search"> -->

                  <!-- <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
                </div>
              </div>
            </div> 
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                <tr>
                  <th><div align="center">Document</div></th>
                  <th><div align="center">User</div></th>
                  <th><div align="center">Date</div></th>
                  <th><div align="center">Level 1</div></th>
                  <th><div align="center">Level 2</div></th>
                  <th><div align="center">Level 3</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $_month_name = array("01"=>"ม.ค.",  "02"=>"ก.พ.",  "03"=>"มี.ค.","04"=>"เม.ย.",  "05"=>"พ.ค.",  "06"=>"มิ.ย.","07"=>"ก.ค.",  "08"=>"ส.ค.",  "09"=>"ก.ย.","10"=>"ต.ค.", "11"=>"พ.ย.",  "12"=>"ธ.ค.");
                $sql="select * from tb_status_send";
                //$sql="select * from tb_status_send";
                    $res = mysqli_query($mysqli,$sql);
                  while($fetch = mysqli_fetch_array($res)){ 
                    //echo $sql;
                    $CHK_BERG1 = substr($fetch['ss_date'],0,4)+543;$CHK_BERG2 = substr($fetch['ss_date'],5,2);$CHK_BERG3 = substr($fetch['ss_date'],8,2);
                    $CHK_BERG = $CHK_BERG3." &nbsp;". $_month_name[$CHK_BERG2]."&nbsp;".$CHK_BERG1;
                    //$docname=extract_int();
                ?>
                    <tr>

                      <td style="text-align: center"><?php echo $fetch['ss_docname']; ?></td>
                      <td style="text-align: center"><?php echo $fetch['ss_namesend']; ?></td>
                      <td style="text-align: center"><?php echo $CHK_BERG; ?></td>
                      <?php if($fetch['doc_aprlv1']=='pending'){ ?>
                      <!-- <td style="text-align: center"><?php echo $fetch['doc_lv1']; ?></td> -->
                      <td><div align="center"><span class="label label-warning">Pending</span></div></td>
                    <?php }else if($fetch['doc_aprlv1']=='approved'){ ?>
                      <td><div align="center"><span class="label label-success">Approved</span></div></td>
                    <?php }else if($fetch['doc_aprlv1']=='noapproved'){ ?>
                      <td><div align="center"><span class="label label-danger">Not-Approved</span></div></td>
                    <?php }else{ ?>
                      <td><div align="center">-</td>
                    <?php } ?>
                    <?php if($fetch['doc_aprlv2']=='pending'){ ?>
                      <!-- <td style="text-align: center"><?php echo $fetch['doc_lv1']; ?></td> -->
                      <td><div align="center"><span class="label label-warning">Pending</span></div></td>
                    <?php }else if($fetch['doc_aprlv2']=='approved'){ ?>
                      <td><div align="center"><span class="label label-success">Approved</span></div></td>
                    <?php }else if($fetch['doc_aprlv2']=='noapproved'){ ?>
                      <td><div align="center"><span class="label label-danger">Not-Approved</span></div></td>
                    <?php }else{ ?>
                      <td><div align="center">-</td>
                    <?php } ?>
                    <?php if($fetch['doc_aprlv3']=='pending'){ ?>
                      <!-- <td style="text-align: center"><?php echo $fetch['doc_lv1']; ?></td> -->
                      <td><div align="center"><span class="label label-warning">Pending</span></div></td>
                    <?php }else if($fetch['doc_aprlv3']=='approved'){ ?>
                      <td><div align="center"><span class="label label-success">Approved</span></div></td>
                    <?php }else if($fetch['doc_aprlv3']=='noapproved'){ ?>
                      <td><div align="center"><span class="label label-danger">Not-Approved</span></div></td>
                    <?php }else{ ?>
                      <td><div align="center">-</td>
                    <?php } ?>
                    </tr>
                <?php } ?>
              </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  <div class="modal fade" id="modal-document">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">รายละเอียดใบคำร้อง</h4>
        </div>
        <div class="modal-body" id="doc_detail">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ปิด</button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
  <script type="text/javascript">
    $(document).on('click', '.view_detail', function(){  
           var doc_id = $(this).attr("id");
           console.log(doc_id);
           if(doc_id != '')  
           {  
                $.ajax({  
                     url:"fetch_detail_doc.php",  
                     method:"POST",  
                     data:{doc_id:doc_id},  
                     success:function(data){  
                          $('#doc_detail').html(data);  
                          //$('#myModal').modal('show');  
                     }  
                });  
           }            
      });
  </script>