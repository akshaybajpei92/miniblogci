<?php 
   //echo "<pre>"; print_r($result); die();
 ?>
<?php $this->load->view("adminpanel/header"); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
      <h2>Edit Blog</h2>
      
      <form enctype="multipart/form-data" action="<?= base_url().'admin/blog/editblog_post' ?>" method="post">
        
        <select class="custom-select" name="publish_unpublish">
          <option value="1" <?= ( $result[0]['status'] == "1" ? "selected" : "" ); ?>>Publish</option>
          <option value="0" <?= ( $result[0]['status'] == "0" ? "selected" : "" ); ?>>Unpublish</option>
        </select>
        <br>
        <input type="hidden" name="blog_id" value="<?= $blog_id ?>">
        <div class="form-group" style="margin-top: 10px;">
          <input type="text" value="<?= $result[0]['blog_title'] ?>" class="form-control" name="blog_title" placeholder="Title">
        </div>

        <div class="form-group">
          <textarea class="form-control" name="desc" placeholder="Blog Desc"><?= $result[0]['blog_desc'] ?></textarea>
        </div>

        <div class="form-group">
          <img width="100" src="<?= base_url().$result[0]['blog_img']?>">
          <input type="file" class="form-control" name="file" placeholder="Title">
        </div>
        
        <button type="submit" class="btn btn-primary">Edit Blog</button>


      </form>

    </main>
  </div>
</div>

<?php $this->load->view('adminpanel/footer.php'); ?>


<script type="text/javascript">
  <?php 
      if (isset($_SESSION['inserted'])) {
        if ($_SESSION['inserted']=="yes") {
          # code...
          echo "alert('Data Inserted Successfully!');";
        }
        else{
          echo "alert('Not Inserted!');";
        }
      }
   ?>
</script>