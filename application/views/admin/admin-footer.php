<?php if($this->session->flashdata('category_added')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_added').'</p>' ?>
<?php endif; ?>
<?php if($this->session->flashdata('post_created')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>' ?>
<?php endif; ?>
<br><br>
<p class="alert alert-info text-center"> These Template is developed by Akash </p>
<br>

</div><!--end of container -->   
<footer class="footer">
    <div class="name text-right"> <h5>Akash</h5> </div>
</footer>
</body>
</html>