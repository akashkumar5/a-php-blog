<h1 class=" card text-center bg-success admin-panel-title" ><?php echo $title ?></h1><br>

    
<div class="row">
    <?php foreach($posts as $post ): ?>
  <div class="col-sm-6 col-md-4">
    <div class="card posts-card">
      <div class="card-block">
          <h4 class="card-title">
              <a href="<?php echo base_url($post['slug']) ?>">
              <?php echo $post['title']; ?>
              </a>                        
            </h4><hr>
          <p class="card-text"><i><?php echo word_limiter($post['content'], 20); ?></i></p>
        <a href="<?php echo base_url('user/edit/'.$post['slug']) ?>" class="btn btn-info post-button">Edit post</a>
        <a href="<?php echo base_url('user/delete_post/'.$post['id'])?>" class="btn btn-danger post-button1">delete post</a>
      </div>
    </div>
  </div>
    <?php endforeach ?>
</div>
    
