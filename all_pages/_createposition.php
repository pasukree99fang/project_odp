<?php include '_session_login.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>2YOU</title>
  <?php include '_plugin.php'; ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '_menu.php'; ?>
    <div class="content-wrapper">
      <section class="content">
      <!-- <form role="form" action="_managecreate_position.php" method="post"> -->
        <?php include '_createposition_body.php'; ?>
      </form> 
      </section>
    </div>

    <?php include '_footer.php'; ?>
    <div class="control-sidebar-bg"></div>

  </div>
  <?php include '_script.php'; ?>
</body>
</html>