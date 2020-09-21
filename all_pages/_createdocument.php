<?php include '_session_login.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>2YOU</title>
  <?php include '_plugin.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '_menu.php'; ?>
    <div class="content-wrapper">
      <section class="content">
        <form role="form" action="_managecreate.php" method="POST" enctype="multipart/form-data">
          <?php include '_createdocument_body.php'; ?>
        </form>
      </section>
    </div>

    <?php include '_footer.php'; ?>
    <div class="control-sidebar-bg"></div>

  </div>
  <?php include '_script.php'; ?>
</body>
</html>