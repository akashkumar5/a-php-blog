<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $basic_title.'--'.$title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/admin-style.css')?>" >
        <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.min.js')?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.min.js')?>" ></script>
    </head>
    <body>
        <div class="container">
<?php if($this->session->userdata('logged_in')): ?>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <i class="navbar-brand"><?php echo $title ?></i>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/index')?>">Admin home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/create_post')?>">Add post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/add_category')?>">Add category</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/posts')?>">Post control</a>
      </li> 
        
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-success logout-btn" href="<?php echo base_url('admin/logout')?>">Log out</a>
    </form>
  </div>
</nav>
<?php else :?>
            <div class="text-center">
        <a class="btn btn-warning " href="<?php echo base_url() ?>">HOME</a>
        <a class="btn btn-warning" href="<?php echo base_url('category/index') ?>">CATEGORY</a>
            </div>
                <?php endif; ?>