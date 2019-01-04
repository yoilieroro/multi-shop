<?php
$pageView = "default";

if (isset($_GET['view'])) {
    $_GET['view'] = strtolower($_GET['view']);
    if (file_exists("view/{$_GET['view']}.php")) {
        $pageView = $_GET['view'];

        if (file_exists("controller/" . ucfirst($_GET['view']) . ".php")) {
            require 'controller/' . ucfirst($_GET['view']) . '.php';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AbelWorld Shop</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">AbelWorld Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <?php
                        foreach ($NavBarLinks as $key => $value) {
                            $link = "";
                            $NavBarLinkActive = "";

                            if (is_array($value)) {
                                ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><?php echo __($value[1]); ?></a>
                                    <div class="dropdown-menu">
                                        <?php
                                        foreach ($value as $key2 => $value2) {
                                            $LangActive = "";

                                            if ($key2 == 1)
                                                continue;

                                            if ($key2 == $lang)
                                                $LangActive = " active";
                                            ?>
                                            <a class="dropdown-item<?php echo $LangActive; ?>" href="?lang=<?php echo $key2; ?>"><?php echo $value2; ?></a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </li> 
                                <?php
                                continue;
                            }

                            if ($key != "index") {
                                $link = "?view=$key";
                            }

                            if ($key == $pageView || ($key == "index" && $pageView == "default"))
                                $NavBarLinkActive = " active";
                            ?>
                            <li class="nav-item">
                                <a class="nav-link<?php echo $NavBarLinkActive; ?>" href="index.php<?php echo $link; ?>"><?php echo __($value); ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!--                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                                            <form class="form-inline" action="?">
                                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                                <button class="btn btn-secondary" type="submit">Search</button>
                                            </form>
                                        </nav>-->
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">
            <?php
            include 'view/' . $pageView . '.php';
            ?>
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; AbelWorld 2019</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>