<?php $this->load->view("adminpanel/header"); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
      <h2>View Blog</h2>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Sr No</th>
              <th>Title</th>
              <th>Desc</th>
              <th>Image</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          	<?php 
          	if ($result) {
          		$counter=1;
          		foreach ($result as $key => $value) {
          			echo "<tr>
			              <td>".$counter."</td>
			              <td>".$value['blog_title']."</td>
			              <td>".$value['blog_desc']."</td>
			              <td><img src='".base_url().$value['blog_img']."' class='img-fluid' width='100'></td>
			              <td><a class=\"btn btn-info\" href=\"base_url().'admin/blog/editblog/1'?>\">Edit</a></td>
			              <td><a class=\"btn btn-danger\" href=\"<?= base_url().'admin/blog/deleteblog/1'?>\">Delete</a></td>
			            </tr>";

			            $counter++;
          		}

          		
          	}
          	else{
          		echo "<tr><td colspan='6'>No Records found</td><tr>";
          	}
          		

          	 ?>

            
            
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

<?php $this->load->view('adminpanel/footer.php'); ?>