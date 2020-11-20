<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include 'connectdb.php';?>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Status Pending</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div> 
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th><div align="center">Document</div></th>
                  <th><div align="center">User</div></th>
                  <th><div align="center">Date</div></th>
                  <th><div align="center">Status</div></th>
                  <th><div align="center">Reason</div></th>
                  <th><div align="center">View Document</div></th>
                </tr>
                <tr>
                  <td><div align="center">183</div></td>
                  <td><div align="center">John Doe</div></td>
                  <td><div align="center">11-7-2014</div></td>
                  <td><div align="center"><span class="label label-danger">Pending</span></div></td>
                  <td><div align="center">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</div></td>
                  <td><div align="center"><button type="submit" class="btn btn-info  btn-primary fa fa-eye"> View!</button></div></td>
                </tr>
                <tr>
                  <td><div align="center">183</div></td>
                  <td><div align="center">John Doe</div></td>
                  <td><div align="center">11-7-2014</div></td>
                  <td><div align="center"><span class="label label-danger">Pending</span></div></td>
                  <td><div align="center">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</div></td>
                  <td><div align="center"><button type="submit" class="btn btn-info  btn-primary fa fa-eye"> View!</button></div></td>
                </tr>
                <tr>
                  <td><div align="center">183</div></td>
                  <td><div align="center">John Doe</div></td>
                  <td><div align="center">11-7-2014</div></td>
                  <td><div align="center"><span class="label label-danger">Pending</span></div></td>
                  <td><div align="center">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</div></td>
                  <td><div align="center"><button type="submit" class="btn btn-info  btn-primary fa fa-eye"> View!</button></div></td>
                </tr>
                <tr>
                  <td><div align="center">183</div></td>
                  <td><div align="center">John Doe</div></td>
                  <td><div align="center">11-7-2014</div></td>
                  <td><div align="center"><span class="label label-danger">Pending</span></div></td>
                  <td><div align="center">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</div></td>
                  <td><div align="center"><button type="submit" class="btn btn-info  btn-primary fa fa-eye"> View!</button></div></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>