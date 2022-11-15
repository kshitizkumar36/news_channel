<?php

$page="dashboard";
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
          <div class="col-sm-3 col-3 menu1">
            <div class="text-center">
              <i class="fa-solid fa-users"></i><br><br>
              <span>View All Users</span>
              <br><br><br>
            </div>
          </div>
           <div class="col-sm-3 col-3 menu2">
            <div class="text-center">
              <a href="check_user_post.php"><i class="fa-sharp fa-solid fa-file"></i><br><br>
              <span>Check User Post </span></a>
              <br><br><br>
            </div>
          </div>
          <div class="col-sm-3 col-3 menu3">
            <div class="text-center">
              <i class="fa-solid fa-plus"></i><br><br>
              <span>Add New Post </span>
              <br><br><br>
            </div>
          </div>
          <div class="col-sm-3 col-3 menu4">
            <div class="text-center">
             <a href="update_post.php"><i class="fa-solid fa-calculator"></i><br><br>
              <span>Update Posts </span></a>
              <br><br><br>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="background-color: #00877a; padding: 10px;">
      <div class="container-fluid text-center label">
      <span>All User Data</span>
      </div>
      <hr>
      <div class="container-fluid">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Created On</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $data= $class1->getalluser();
                    foreach ($data as $key ) {
                      ?>

                          <th scope="row"><?php echo $key['id']; ?></th>
                            <td><?php echo $key['name']; ?></td>
                            <td><?php echo $key['email']; ?></td>
                            <td><?php echo $key['mobile']; ?></td>
                            <td><?php echo $key['dob']; ?></td>
                            <td><?php echo $key['address']; ?></td>
                            <td><?php echo $key['password']; ?></td>
                            <td><?php echo $key['creation_date']; ?></td>
                      <?php
                    }

                    ?>
                  
                  </tr>
                 
                </tbody>
              </table>
      </div>
    </section>




    <!-- dashboard design ends here -->
<?php
include'footer.php';
?>
    