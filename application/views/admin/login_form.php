<div class="row login-page">
    <div class="col-md-4 offset-md-4 bg-primary login-box">
        <?php echo validation_errors() ?>
        <?php echo form_open('admin/login') ?>
        <h3 class="text-center"><?php echo $title ?></h3><hr>
        <div class="form-group">
            <label>UserName:</label>
            <input type="text" name="username" class="form-control" placeholder="username">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder=" password">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="form-control btn btn-success" value="Log in">
        </div>
        <?php echo form_close() ?>
    </div>
</div>