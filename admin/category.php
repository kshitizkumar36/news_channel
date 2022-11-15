<?php
$page="category";
include'header.php';
include'admin_class1.php';
$class1= new class1();
?>
    <!-- dashboard design starts here -->

    <div style="background-color: #006f63;" class=" container-fluid text-left pageid p-3">
      <span>News Dashboard</span>
    </div> 

    <section style="background-color: #dee2ee;" class="p-3">
      <div class="container-fluid">
       <div class="row">
         <div class="col-sm-3"></div>
         <div class="col-sm-6 col-12 ">
           <div style="background-color: #0ea1d2; padding: 10px;" class="form">
             <form method="post" action="backend.php">
               <label>Create News Category</label>
               <input type="text" class="form-control" placeholder="Enter Category of the News" name="category">
               <hr>
              <input type="submit" class="form-control btn btn-success" value="Add Category" name="submit_category">
             </form>
           </div>
         </div>
         <div class="col-sm-3"></div>
       </div>
      </div>
    </section>

    <section style="background-color: #00877a; padding: 10px;">
      <div class="container-fluid text-center label">
      <span>Update News Category</span>
      </div>
      <hr>
      <div class="container-fluid">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">News Category</th>
      <th scope="col">Update</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
       $data= $class1->weather();
       foreach ($data as $key ) {
         ?>
         <tr>
          <th scope="row"><?php echo $key['id']; ?></th>
            <td><?php echo $key['category_name']; ?></td>
    </tr>
            

         <?php
       }
      ?>
     
    
  </tbody>
</table>
      </div>
    </section>




    <!-- dashboard design ends here -->
<?php
include'footer.php';
?>
    