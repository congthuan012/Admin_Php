<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'views/widgets/head.php' ?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php include 'views/widgets/menu.php' ?>
            <?php include 'views/widgets/top.php' ?>

            <!-- page content -->
            <div class="right_col" role="main">
                <?php                   
                    include $view.'.php' ;
                ?>
            </div>
            <!-- /page content -->

            <?php include 'views/widgets/footer.php' ?>
        </div>
    </div>
    <?php include 'views/widgets/js.php' ?>
    

</body>

</html>