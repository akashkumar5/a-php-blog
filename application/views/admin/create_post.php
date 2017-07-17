<script src="<?php echo base_url('asset/ckeditor/ckeditor.js'); ?>"></script>
<h3 class="card text-center bg-success admin-panel-title"><?php echo 'title' ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('user/create_post');?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter title here"> 
    </div>
    <div class="form-group">
        <label>Description of post</label>
        <textarea type="text" id="editor1"class="form-control" name="content" placeholder="write the content you have  of your"></textarea>
    </div>
    <div class="form-group">
        <select name="category_id" class="form-control">
            <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['category_id']; ?>"><?php echo $category ['category']; ?></option>
            <?php endforeach ?>
        </select>
    </div>
	<div class="form-group">
		<label>upload-image</label><br>
        <input type="file" name="userfile" size="20" accept="image/*">
	</div>
    <input type="submit" name="submit" value="submit post">
<script>
CKEDITOR.replace( 'editor1' );
</script>
</form>