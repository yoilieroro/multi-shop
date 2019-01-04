<?php
$login = Login::login();
?>
<div class="row">

    <div class="col-lg-3">

        <h1 class="my-4"><?php echo __("Shop Name"); ?></h1>
        <div class="list-group">
            <a href="#" class="list-group-item"><?php echo __("Category"); ?> 1</a>
            <a href="#" class="list-group-item"><?php echo __("Category"); ?> 2</a>
            <a href="#" class="list-group-item"><?php echo __("Category"); ?> 3</a>
        </div>

    </div>

    <div class="col-lg-6">
        <?php if ($login == "ERROR") { ?>
            <br/>
            <div class="alert alert-danger">
                <strong>Denied access!</strong> User or password incorrect! 
            </div>
        <?php } ?>
        <br/>
        <div class="container">

            <form class="form-signin" action="?view=login" method="post">
                <h2 class="form-signin-heading"><?php echo __("Sign in"); ?></h2>
                <div class="form-group">
                    <label for="email"><?php echo __("Email address"); ?>:</label>
                    <input type="email" class="form-control" placeholder="Email address" name="email" autofocus="" required="">
                </div>
                <div class="form-group">
                    <label for="pwd"><?php echo __("Password"); ?>:</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>

                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> <?php echo __("Remember me"); ?>
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo __("Sign in"); ?></button>
            </form>

        </div>
        <br/>
    </div>

</div>