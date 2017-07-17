<h1 class=" card text-center bg-success admin-panel-title" ><?php echo $title ?></h1><br>
<div class="row">
        <div class="col-md-4 offset-md-4">
        <?php echo validation_errors() ?>
        <?php echo form_open('user/basic_setting') ?>
        <h3 class="text-center"><?php echo $title ?></h3><hr>
        <div class="form-group">
            <label>Title of the blog</label>
            <input type="text" name="name" class="form-control" placeholder="choose the nice one" value="<?php echo $basic_title ?>">
                          
        </div>
        <div class="form-group">
            <label>copyright by</label>
            <input type="text" name="copyright" class="form-control" placeholder ="this will appear at bottom" value="<?php echo $copyright ?>">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="form-control btn btn-success" value="Update">
        </div>
        <?php echo form_close() ?>
    </div>
</div>