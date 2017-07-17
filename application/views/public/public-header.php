<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
                if(isset($title)){
                    echo $basic_title.'--'.$title;
                }
                elseif(isset($posts['title'])){
                    echo $basic_title.'--'.$posts['title'];
                }
                else{
                    echo'best blog';
                }
            ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/public-style.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.min.js')?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.min.js')?>" ></script>
    </head>
    <body style="">

    <nav class="navbar navbar-toggleable-sm bg-inverse fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-header">
        <i class="navbar-brand" href="#">
            <?php
                if(isset($title)){
                    echo $basic_title;
                }
                elseif(isset($posts['title'])){
                    echo $basic_title;
                }
                else{
                    echo'best blog';
                }
            ?>
        </i>
            </div>
        <div class="collapse navbar-collapse justify-content-end text-right" id="nav-content">   
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('category/index') ?>">Categories</a>
                </li>
            </ul>
        </div>
    </nav><br><br>
<div class="container">
        <br><br>