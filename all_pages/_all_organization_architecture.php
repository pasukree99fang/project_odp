<?php include '_session_login.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>2YOU</title>
  <?php //include '_plugin.php'; ?>
  <link rel="icon" type="image/png" href="dist/img/logo.png"/>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">  
    <?php include '_menu.php'; ?>
    <div class="content-wrapper">
      <section class="content">
      <!-- <form role="form" action="_manageall_organization.php" method="post"> -->
        <?php include '_all_organization_architecture_body.php'; ?>
      <!-- </form> -->
      </section>
    </div>

    <?php include '_footer.php'; ?>
    <div class="control-sidebar-bg"></div>

  </div>
  <?php include '_script.php'; ?>
</body>
</html>