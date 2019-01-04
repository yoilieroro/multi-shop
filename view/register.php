<div class="row">

    <div class="col-lg-3">

        <h1 class="my-4"><?php echo __("Shop Name");?></h1>
         <div class="list-group">
            <a href="#" class="list-group-item"><?php echo __("Category");?> 1</a>
            <a href="#" class="list-group-item"><?php echo __("Category");?> 2</a>
            <a href="#" class="list-group-item"><?php echo __("Category");?> 3</a>
        </div>

    </div>
    
    <div class="col-lg-6"><br/>
        <form action="?view=register" method="post"> 
            <h2 class="form-signin-heading"><?php echo __("Register");?></h2>
            <div class="form-group">
                <label for="email"><?php echo __("Name");?>:</label>
                <input type="text" class="form-control" id="name" placeholder="Name" autofocus="" required="">
            </div>
            <div class="form-group">
                <label for="email"><?php echo __("Email address");?>:</label>
                <input type="email" class="form-control" id="email" placeholder="Email address" required="">
            </div>
            <div class="form-group">
                <label for="pwd"><?php echo __("Password");?>:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Password" required="">
            </div>
            <div class="form-group">
                <label for="pwd2"><?php echo __("Re-Password");?>:</label>
                <input type="password" class="form-control" id="pwd2" placeholder="Re-Password" required="">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo __("Submit");?></button>
        </form><br/>
    </div>

</div>