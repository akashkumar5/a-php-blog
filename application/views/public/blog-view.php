<h2 class="post-title"><?php echo $posts['title'] ?></h2>
            <div class="row">
    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="text-right"><small>posted on : <?php echo $posts['date']; ?></small><br></div>
    <div class="container">

                <div class="post-image-box">
                    <img class="post-image img-responsive" src="<?php echo base_url('asset/images/posts/');?><?php echo $posts['post_image']; ?>" class="img-responsive">
                </div>
                <div class="content">
                <?php echo $posts['content'];?>
                </div>
        </div></div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 list-category">
                <h2 class="text-center">All Category</h2>
                <br>
                <?php foreach($categories as $category): ?>
                <ul>
                    <a href="<?php echo base_url('category/post'.'/'.$category['category_id']) ?>">
                        <li> <?php echo $category['category'] ?></li> 
                    </a>
                </ul>
                <?php endforeach; ?>
            </div>
 
    </div>

    <hr>
    <div class="card comment-area">
            <div class="card-title">
                <h3 align="center">Comments</h3>
            </div>  
                <?php if($comments) : ?>
                <?php foreach($comments as $comment) : ?>
                <div class="comment-box">
                    <div class="card-inner">
                        <div class="comment">
                        <?php echo $comment['comment']; ?>
                        </div><hr>
                        <div class="comment-by text-right">
                            <small>commented by</small>
                            <?php echo $comment['name']?>
                        </div>
                    </div>
                </div>
                <hr>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="text-center comment-no" >No Comments For Display</div>
                <?php endif ; ?>
                
                <!--add comment-->
                <h5 class="text-center">Add Comment</h5>
                <?php echo validation_errors(); ?>
                <?php echo form_open('welcome/comment_create/'.$posts['id']);?>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea name="comment" class="form-control"></textarea>
                </div>
                <input type="hidden" name="slug" value="<?php echo $posts['slug'] ?>">
                <input type="submit" name="submit" value="comment" class="btn btn-info">
                </form>
            </div>
        </div>
    </div>

<br>



    