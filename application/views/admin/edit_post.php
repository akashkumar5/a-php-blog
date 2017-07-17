<script src="<?php echo base_url('asset/ckeditor/ckeditor.js'); ?>"></script>
<h3 class="card text-center bg-success admin-panel-title"><?php echo $title ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('user/update_post');?>
<input type="hidden" name="id" value="<?php echo $posts['id'] ?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter title here" value="<?php echo $posts['title'] ?>"> 
    </div>
    <div class="form-group">
        <label>Description of post</label>
        <textarea type="text" id="editor1"class="form-control" name="content" placeholder="write the content you have  of your" value>
        <?php echo $posts['content'] ?>
        </textarea>
    </div>
    <div class="form-group">
        <select name="category_id" class="form-control">
            <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['category_id']; ?>"><?php echo $category ['category']; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <input type="submit" name="submit" value="Update post">
<script>
CKEDITOR.replace( 'editor1' );
</script>
</form>