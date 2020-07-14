
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <?php require_once 'partials/_head.php'; ?>
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
      <?php require_once 'partials/_header.php'; ?>
    </nav>
    <div class="site-menubar">
      <?php require_once 'partials/_sidebar.php' ?>
    </div>

    <!-- Page -->
    <div class="page">
      <?php eval($content) ?>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <?php require_once 'partials/_footer.php' ?>
    </footer>
    <!-- Core  -->

    <?php require_once 'partials/_scripts.php'; ?>

  </body>
</html>
