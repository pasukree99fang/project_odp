<div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Create Document</h3>

            <!-- - / X -->
            <!-- <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div> -->
          </div>

          <?php include '_manageform.php'; ?>

        <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group ">
                    <label>Document Title </label>
                        <input type="text" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Enter Document title">
                  </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <a class="btn btn-app" type=button name="adminBtn" value="FILE" onclick="displayTextForm()">
                    <i class="fa fa-text-width"></i> 
                    <label>Text</label>
                  </a>
                </div>
              </div>
        
          
              <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-app" type=button name="adminBtn" value="FILE" onclick="displayTextForm()">
                      <i class="fa fa-text-width"></i> 
                      <label>Text</label>
                    </a>
                </div>

                <div class="col-md-1">
                    <a class="btn btn-app" type=button name="adminBtn" value="FILE" onclick="displayTextForm()">
                      <i class="fa fa-comments"></i> 
                      <label>Text box</label>
                    </a>
                </div>

                <div class="col-md-1" style="align:center">
                    <a class="btn btn-app" type=button name="adminBtn" value="FILE" onclick="displayFileForm()">
                    <i class="fa fa-upload"></i> 
                    <label>File upload </label>
                    </a>
                </div> 

                <div class="col-md-1" style="align:center">
                  <a class="btn btn-app" type=button name="adminBtn" value="FILE" onclick="displayForm()">
                    <i class="fa fa-check-square"></i> 
                    <label>Checkbox</label>
                  </a>
                </div>

                <div class="col-md-1" style="align:center">
                  <a class="btn btn-app" type=button name="adminBtn" value="FILE" onclick="displayForm()">
                    <i class="fa fa-dot-circle-o"></i> 
                    <label>Radio Button</label>
                  </a>
                </div>

                <!-- <div class="col-md-1" style="align:center">
                  <a class="btn btn-app" type=button name="adminBtn" value="FILE" onclick="displayForm()">
                    <i class="fa fa-remove"></i> 
                    <label>Delete</label>
                  </a>
                </div> -->
                
              </div>
        </div>

        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Step number of approval</label>
                <select class="form-control select2" style="width: 100%;" name="stepnum">
                  <option selected="selected">Choose Number</option>
                  <option value="1">1</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <!-- <div class="col-md-4">
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
            </div> -->

            <!-- <div class="col-md-4">
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
            </div> -->

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
        </div>

        <!-- <div class="box-footer">
          Please check correctness before pressing next.
        </div> -->

        <div class="box-footer">
                <!-- <button type="submit" class="btn btn-default"><a href="_createdocument.php">Back</a></button> -->
                <!-- <button type="submit" class="btn btn-default pull-right"><a href="_assign_privilegr.php">Next</a></button> -->
                <button type="submit" class="btn btn-primary pull-right fa fa-download"> Save</button> 
        </div>
  </div>