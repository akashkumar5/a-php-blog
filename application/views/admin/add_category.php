<h1 class=" card text-center bg-success admin-panel-title" ><?php echo $title ?></h1><br>
<div class="row">
        <div class="col-md-4 offset-md-4">
        <?php echo validation_errors() ?>
        <?php echo form_open_multipart('user/add_category') ?>
        <h3 class="text-center"><?php echo $title ?></h3><hr>
        <div class="form-group">
            <label>Category name</label>
            <input type="text" name="name" class="form-control" placeholder="you can't change or delete that">
        </div>
        <div class="form-group">
            <label>Add image</label>
            <input type="file" name="userfile" class="form-control" accept="image/*" >
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="form-control btn btn-success" value="Add category">
        </div>
        <?php echo form_close() ?>
    </div>
</div>