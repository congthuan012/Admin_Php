<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'views/widgets/head.php' ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
            <?php                   
                include $view.'.php' ;
            ?>
      </div>
    </div>
    <?php include 'views/widgets/js.php' ?>
  </body>
</html>
