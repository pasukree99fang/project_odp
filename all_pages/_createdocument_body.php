<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Document</h3>

          <!-- - / X -->
          <!-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div> -->
        </div>

        <?php include '_managform.php'; ?>

        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Document title</label>
                    <input type="text" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Enter Document title">
              </div>
            </div>

            <!-- <div class="col-md-4">
            <div class="form-group">
                  <label>File input</label>
                  <input type="file" id="inputfile" name="inputfile">
                  <p class="help-block">Choose file to set permissions.</p>
                </div>
            </div> -->
          </div>
        </div>
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
            <label>Click Text to add text.</label><br>
              <input class="btn btn-default form-control"type=button name="adminBtn" value="TEXT" onclick="displayForm()"><br><br>
            </div>

            <div class="col-md-4">
              <div id="pwdForm"></div>
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
            <label>Click File to add files.</label><br>
              <input class="btn btn-default form-control"type=button name="adminBtn" value="FILE" onclick="displayForm()"><br><br>
            </div>

            <div class="col-md-4">
              <div id="pwdForm"></div>
            </div>
          </div>
        </div>

        <!-- <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              คลิก Photo เพื่อเพิ่มรูปภาพ<br>
              <input class="btn btn-default form-control"type=button name="adminBtn" value="PHOTO" onclick="displayForm()"><br><br>
            </div>

            <div class="col-md-4">
              <div id="pwdForm"></div>
            </div>
          </div>
        </div> -->

        <div class="box-footer">
          Please check correctness before pressing next.
        </div>
        <div class="box-footer">
                <!-- <button type="submit" class="btn btn-default"><a href="_createdocument.php">Back</a></button> -->
                <button type="submit" class="btn btn-default pull-right"><a href="_assign_privilegr.php">Next</a></button>
        </div>
</div>
