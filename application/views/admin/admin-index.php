<h1 class=" card text-center bg-success admin-panel-title" ><?php echo $title ?></h1><br>
<div class="admin-index">
<a href="<?php echo base_url('user/create_post') ?>"><div class="card card-info text-center admin-content">Add post</div></a>
<a href="<?php echo base_url('user/add_category') ?>"><div class="card card-info text-center admin-content"> Add Category </div></a>
<a href="<?php echo base_url('user/posts') ?>"><div class="card card-info text-center admin-content"> Edit and delete post</div></a>
<a href="<?php echo base_url('user/basic_setting') ?>"><div class="card card-info text-center admin-content"> Basic  Setting</div></a>
<a href="<?php echo base_url('') ?>"><div class="card card-success text-center admin-content"> Read more</div></a>
    <br><br></div>
<a class="btn btn-warning align-right" href="<?php echo base_url('admin/logout') ?>">Logout</a>
    