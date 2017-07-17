<div class="row">
    <div class="col-md-9 col-lg-9 col-xl-9 col-sm-12 col-xs-12">
        <h2><?= $title ?></h2><br>
             <?php foreach($posts as $post): ?>
          <div class="row">
               <div class="col-md-3">
                    <img class="index-post-image"src="<?php echo base_url('asset/images/posts/');?><?php echo $post['post_image']; ?>" class="img-responsive">
                    </div>
                <div class="col-md-8">
                    <h3><?php echo $post['title']; ?></h3>
                    <small>posted on : <?php echo $post['date']; ?>
                    in
                    <a href="<?php echo base_url('category/post'.'/'.$post['category_id']) ?>">
                    <?php echo $post['category'] ?>
                    </a>
                    </small><br>
                    <?php echo word_limiter($post['content'],70); ?><br>
                    <a class="read-more" href="<?php echo base_url($post["slug"])?>">read more</a>
                </div>
            </div>
    <br/><hr/><br/>
    <?php endforeach; ?>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 col-sm-12 col-xs-12 list-category">
            <h2 class="text-center">All Category</h2>
            <br>
            <?php foreach($categories as $category): ?>
            <ul>
                <a href="<?php echo base_url('category/post'.'/'.$category['category_id']) ?>"><li> <?php echo $category['category'] ?></li> </a>
            </ul>
            <?php endforeach; ?>
        </div> 
    </div>