<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include 'connectdb.php';
?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<header class="main-header">
<?php include 'connectdb.php'; ?>
    <a href="_home.php" class="logo">
      <span class="logo-mini"><b>2</b>U</span>
      <span class="logo-lg"><b>2</b>YOU</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu ">
        <ul class="nav navbar-nav">
          
          <li class="dropdown notifications-menu">
            <!-- <a href="#" id="btn1" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="badge_number label label-warning">0</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have notifications</li>
              <li>
                
                <ul class="menu">
                  
                </ul>
              </li>
              <li class="footer"><a href="send.php">View all</a></li>
            </ul>
          </li>
          
          <li class="dropdown user user-menu ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="file/me.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['us_firstname']; ?> <?php echo $_SESSION['us_lastname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="file/me.png" class="img-circle" alt="User Image">


                <!-- DB1 tb_position -->
                <?php $SQL1 = "SELECT a.us_id, a.us_username, a.us_po,
                b.pst_id,b.pst_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_position) b ON (a.us_po = b.pst_id)
                WHERE us_username = '".$_SESSION['us_username']."'";
                $objQuery1 = mysqli_query($mysqli,$SQL1);
                $objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC); ?>
                
                <!-- DB2 tb_department -->
                <?php $SQL2 = "SELECT a.us_id, a.us_username, a.us_dp, 
                b.dpm_id,b.dpm_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_department) b ON (a.us_dp = b.dpm_id)
                WHERE us_username = '".$_SESSION['us_username']."'";
                $objQuery2 = mysqli_query($mysqli,$SQL2);
                $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC); ?> 
 
                <!-- DB3 tb_sub_department -->
                <?php $SQL3 = "SELECT a.us_id, a.us_username, a.us_sub_dp, 
                b.sub_id,b.sub_name FROM tb_user a 
                LEFT OUTER JOIN (SELECT * FROM tb_sub_department) b ON (a.us_sub_dp = b.sub_id)
                WHERE us_username = '".$_SESSION['us_username']."'";
                $objQuery3 = mysqli_query($mysqli,$SQL3);
                $objResult3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC); ?> 
              

                <p>
                <?php echo $_SESSION['us_firstname']; ?> <?php echo $_SESSION['us_lastname']; ?> - <?php echo $objResult1['pst_name']; ?>
                  <?php echo $objResult2['dpm_name']; ?> : <?php echo $objResult3['sub_name']; ?>
                </p>
              </li>

              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="_profile.php" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="_logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>

    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="file/me.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['us_firstname']; ?> <?php echo $_SESSION['us_lastname']; ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        
        <li><a href="_home.php"><i class="fa fa-edit"></i> <span>Home</span></a></li>
        <li class="header">FOR USER</li>
        <li><a href="_document.php"><i class="fa fa-table"></i> <span>Document</span></a></li>
        <li><a href="_status_all.php"><i class="fa fa-envelope"></i> <span>Status</span></a></li>
        
        <!-- <li class="treeview">
          <a href="_status.php">
            <i class="fa fa-envelope"></i> <span>Status</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <small class="label pull-right bg-yellow">12</small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="_status_all.php"><i class="fa fa-circle-o text-aqua"></i> All</a></li>
            <li><a href="_status_pending.php"><i class="fa fa-circle-o text-yellow"></i> Pending</a></li>
            <li><a href="_status_approved.php"><i class="fa fa-circle-o text-green"></i> Approved</a></li>
          </ul>
        </li> -->
        
        <?php if($_SESSION['us_isapproval']=='yes'|| $_SESSION['us_isadmin']=='yes'){ ?>
        <li class="header">FOR APPROVE</li>
        <li><a href="_approve_all.php"><i class="fa fa-folder"></i> <span>Approve</span></a></li>
        <!-- <li class="treeview">
            <a href="_approve.php">
              <i class="fa fa-folder"></i> <span>Approve</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                <small class="label pull-right bg-red">5</small>
              </span>
            </a>
          <ul class="treeview-menu">
            <li><a href="_approve_all.php"><i class="fa fa-circle-o text-aqua"></i> All</a></li>
            <li><a href="_approve_pending.php"><i class="fa fa-circle-o text-red"></i> Pending</a></li>
            <li><a href="_approve_approved.php"><i class="fa fa-circle-o text-green"></i> Approved</a></li>
          </ul>
        </li> -->
        <?php } ?>

        <?php if($_SESSION['us_isadmin']=='yes'){ ?>
        <li class="header">FOR ADMIN</li>
        <li><a href="_all_organization_architecture.php"><i class="fa fa-pie-chart"></i> <span>All Organization Architecture</span></a></li>
        <li><a href="_alluser.php"><i class="fa fa-book"></i> <span>All User</span></a></li>
        <li><a href="_alldocument.php"><i class="fa fa-files-o"></i> <span>All Document</span></a></li>
        <li><a href="_edit_approval.php"><i class="fa fa-laptop"></i> <span>Edit Approval</span></a></li>

        <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Create</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          <ul class="treeview-menu">
            <li><a href="_createdepartment.php"><i class="fa fa-share"></i> Organization Architecture</a></li>
            <li><a href="_createuser.php"><i class="fa fa-share"></i> User</a></li>
            <!-- <li><a href="_createdocument.php"><i class="fa fa-share"></i> Document</a></li> -->
            <li><a href="__cdocfix.php"><i class="fa fa-share"></i> Document</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
    </section>
  </aside>