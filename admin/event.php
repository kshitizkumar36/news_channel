<?php
$page="Event";
include'header.php';
include'admin_class1.php';
$class1= new class1();
 $data= $class1->get_event_data();
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
             <form method="post" action="backend.php" enctype="multipart/form-data">
               <label>Add Event Name for the News</label>
               <input type="text" class="form-control" placeholder="Enter Event Name" name="event_heading">
               <hr>
               <input type="text" class="form-control" placeholder="Enter Event News" name="news">
               <hr>
               <input type="file" class="form-control" name="image">
              <input type="submit" class="form-control btn btn-success" value="Add Event News" name="add_event_news">
             </form>
           </div>
         </div>
         <div class="col-sm-3"></div>
       </div>
      </div>
    </section>

    <section style="background-color: #00877a; padding: 10px;">
      <div class="container-fluid text-center label">
      <span>Update Event </span>
      </div>
      <hr>
      <div class="container-fluid">
      <table class="table">
  <thead>
   
    <tr>
      <th scope="col">#</th>
      <th scope="col">Event Heading</th>
       <th scope="col">News</th>
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
      <th scope="row"><?php echo $key['id']; ?></th>
      <td><?php echo $key['heading']; ?></td>
       <td><?php echo $key['news']; ?></td>
        <td><a class="text-white" href="remove_event.php?id= <?php echo $key['id']; ?>">Remove</a></td>
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
    