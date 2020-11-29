  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Document</h3>
        </div>
        <div class="box-body" id="cdoc">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group ">
                <label>Document Title </label>
                <input type="text" class="form-control" id="dtitle" name="dtitle" placeholder="Enter Document title">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Step number of approval</label>
                <select class="form-control select2" style="width: 100%;" name="stepnum">
                  <option selected="selected">Choose Number</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
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
          <button type="submit" class="btn btn-primary pull-right fa fa-download"> Preview</button> 
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Tools Document</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-app" type="button" id="addcd" name="addcd">
                <i class="fa fa-text-width"></i> 
                <label>Text</label>
              </button>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-app" type=button name="addcda" id="addcda">
                <i class="fa fa-comments"></i> 
                <label>Textarea</label>
              </a>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-app" type=button name="addfileupload" id="addfileupload">
                <i class="fa fa-upload"></i> 
                <label>File upload </label>
              </a>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-app" type=button name="addcheckbox" id="addcheckbox">
                <i class="fa fa-check-square"></i> 
                <label>Checkbox</label>
              </a>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-app" type=button name="addradio" id="addradio">
                <i class="fa fa-dot-circle-o"></i> 
                <label>Radio Button</label>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
<script>
$(document).ready(function(){
    var i=1;
    $('#addcd').click(function(){
        i++;
        $('#cdoc').append('<div class="row"><div class="col-md-5" id="row'+i+'"><input type="text" name="note_title[]" class="form-control" placeholder="Enter"></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button><div class="col-md-7"></div></div><br />');
    });

    $('#addcda').click(function(){
        i++;
        $('#cdoc').append('<div class="row"><div class="col-md-5" id="row'+i+'"><textarea type="text" name="notea_title[]" rows="4" cols="50" class="form-control"></textarea></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button><div class="col-md-7"></div></div><br />');
    });

    $('#addfileupload').click(function(){
        i++;
        $('#cdoc').append('<div class="row"><div class="col-md-5" id="row'+i+'"><input type="file" name="files[]" rows="4" cols="50" class="form-control"></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button><div class="col-md-7"></div></div><br />');
    });

    $('#addcheckbox').click(function(){
        i++;
        $('#cdoc').append('<div class="row"><div class="col-md-5" id="row'+i+'"><input type="checkbox" id="vehicle" name="vehicle[]">&nbsp&nbsp&nbsp&nbsp&nbsp<label for="vehicle"><input type="text" name="chkbox[]" class="form-control" placeholder="Enter"></label></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button><div class="col-md-7"></div></div><br />');
    });

    $('#addradio').click(function(){
        i++;
        $('#cdoc').append('<div class="row"><div class="col-md-5" id="row'+i+'"><input type="radio" id="huey" name="drone[]" checked>&nbsp&nbsp&nbsp&nbsp&nbsp<label for="huey"><input type="text" name="radios[]" class="form-control" placeholder="Enter"></label></label></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button><div class="col-md-7"></div></div><br />');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
        $('#'+button_id+'').remove();
    });
});
</script>
  