  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Document</h3>
        </div>
        <div class="box-body">
        <form role="form" action="__cdoc_preview.php" method="POST" enctype="multipart/form-data" >
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
          <div class="row">
            <div class="col-md-5 table-responsive">
              <table class="table" id="cdoc"></table>
            </div>
            <div class="col-md-7"></div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right fa fa-download"> Preview</button> 
        </div>
      </form>
      </div>
    </div>
    <div class="col-md-2">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Tools Document</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-app" type="button" id="addcdl" name="addcdl">
                <i class="fa fa-text-width"></i> 
                <label>Label</label>
              </button>
            </div>
            <div class="col-md-6">
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
    $('#addcdl').click(function(){
        i++;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;">Label:<input type="text" name="labeltext[]" class="form-control" placeholder="Enter" /><input type="hidden" name="labeltextx[]" class="form-control" value="label" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });

    $('#addcd').click(function(){
        i++;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;">Text:<input type="text" name="inputtext[]" class="form-control" placeholder="Enter" /><input type="hidden" name="inputtextx[]" class="form-control" value="inputtext" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });

    $('#addcda').click(function(){
        i++;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;">textarea:<textarea type="text" name="textarea[]" rows="4" cols="50" class="form-control"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });

    $('#addfileupload').click(function(){
        i++;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;">File:<input type="file" name="files[]" rows="4" cols="50" class="form-control"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });

    $('#addcheckbox').click(function(){
        i++;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;">Checkbox:<input type="checkbox" id="chkbox" name="chkbox[]">&nbsp&nbsp&nbsp&nbsp&nbsp<label for="chkbox"><input type="text" name="chkbox[]" class="form-control" placeholder="Enter"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });

    $('#addradio').click(function(){
        i++;
        $('#cdoc').append('<tr id="row'+i+'"><td style="margin-top: 3px;">Radio:<input type="radio" id="rao" name="rao[]" checked>&nbsp&nbsp&nbsp&nbsp&nbsp<label for="rao"><input type="text" name="radios[]" class="form-control" placeholder="Enter"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 3px;">X</button></td></tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
        $('#'+button_id+'').remove();
    });
});
</script>
  