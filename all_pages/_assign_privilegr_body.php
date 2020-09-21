<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Assign Privilege</h3>

          <!-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div> -->
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Document title</label>
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Document title" disabled>
              </div>
            </div>

            <!-- <div class="col-md-4">
            <div class="form-group">
                  <label>File input</label>
                  <input type="text" class="form-control" placeholder="Document ID" disabled>
                </div>
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
        </div>
        <div class="box-footer">
          Please check the accuracy before pressing submit.
        </div>
        <div class="box-footer">
                <button type="submit" class="btn btn-default"><a href="_createdocument.php">Back</a></button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
</div>