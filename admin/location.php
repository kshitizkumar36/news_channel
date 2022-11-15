<?php
$page="Location";
include'header.php';
include'admin_class1.php';
$class1= new class1();
$data= $class1->get_location();
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
               <label>Add location of our Service Area</label>
               <input type="text" class="form-control" placeholder="Enter Place Name" name="area">
               <hr>
              <input type="submit" class="form-control btn btn-success" value="Add Place" name="post_location">
             </form>
           </div>
         </div>
         <div class="col-sm-3"></div>
       </div>
      </div>
    </section>

    <section style="background-color: #00877a; padding: 10px;">
      <div class="container-fluid text-center label">
      <span>Update Location </span>
      </div>
      <hr>
      <div class="container-fluid">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Location Place</th>
       <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if($data==0)
    {
      ?>
       <tr>
            <th scope="row">0</th>
            <td>0</td>
             <td>0</td>
          </tr>
      <?php
    }
    else
    {
      foreach ($data as $key ) {
        ?>

           <tr>
            <th scope="row"><?php  echo $key['id']; ?></th>
            <td><?php echo $key['location']; ?></td>
             <td><a class="text-white" href="remove_location.php?id=<?php echo $key['id']; ?>">Remove</a></td>
          </tr>

        <?php
      }
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
    