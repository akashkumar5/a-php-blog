<div class="container">
    <h2><?= $title;?></h2>
    <div class="row">
        <?php foreach($categories as $category): ?>
     <div class="col-sm-6 col-xs-4 col-md-4 col-lg-4 col-xl-3">
    <div class="card category-card">
      <div class="card-block">
        <h3 class="card-title text-center"><?php echo $category['category'] ?></h3>
        <img src="<?php echo base_url('asset/images/categories/'.$category['category_image']) ?>" alt="sorry image in no longer" class="img-fluid img-thumbnail">
        <a href="<?php echo base_url('category/post/'.$category['category_id'])?>" class="btn btn-info btn-block">View Category</a>
      </div>
    </div>
  </div>
        <?php endforeach; ?>     
</div>
</div>

            <a href="">
            
            </a>

