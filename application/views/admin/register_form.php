<div class="row">
    <div class="col-md-4 offset-md-4 bg-primary">
        <?php echo validation_errors() ?>
        <?php echo form_open('admin/register') ?>
        <h3 class="text-center"><?php echo $title ?></h3><hr>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="enter your name">
        </div>
        <div class="form-group">
            <label>UserName:</label>
            <input type="text" name="username" class="form-control" placeholder="choose a username">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="enter your email">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="choose a password">
        </div>
        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" name="password1" class="form-control" placeholder="type your password again">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="form-control btn btn-success" value="register">
        </div>
        <?php echo form_close() ?>
    </div>
</div>