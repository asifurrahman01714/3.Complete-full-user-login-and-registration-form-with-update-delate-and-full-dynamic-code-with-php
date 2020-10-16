<?php include "db.php";?>
<?php include "header.php";?>

  <?php
  
  $query = "SELECT * FROM users";
  $select_all_users = mysqli_query($connect, $query);

  ?>


    <section class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>All Registered Users</h1>
                <table class="table table-striped table-dark table-hover">
                      <thead>
                        <tr>
                          <th scope="col">User ID</th>
                          <th scope="col">Username</th>
                          <th scope="col">User Email</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Adress</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php

                      while ($row = mysqli_fetch_assoc($select_all_users)){
                        $user_ID = $row['user_ID'];
                        $username = $row['username'];                       
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $user_address = $row['user_address'];   
                    

                      ?>

                        <tr>
                            <th scope="row"><?php echo $user_ID; ?></th>
                            <td><?php echo $username; ?></td>
                           
                            <td><?php echo $email; ?></td>
                            <td><?php echo $phone; ?></td>
                            <td><?php echo $user_address; ?></td>
                            <td>
                              <div class="btn-group">
                                <a href="update-users.php?update=<?php echo $user_ID; ?>" class="btn btn-success">Update</a>
                                <a href="all-users.php?delete=<?php echo $user_ID; ?>" class="btn btn-danger">Delete</a>
                              </div>
                            </td>
                        </tr>
                      <?php
                  
                      } 

                      ?>


                       
                       
                       
                      </tbody>
                  </table>
            </div>
        </div>
    </section>

  <?php
    if (isset($_GET['delete'])) {
     $the_user_id = $_GET['delete'];
     $query = "DELETE FROM users WHERE user_ID=$the_user_id";
     $delet_user = mysqli_query($connect, $query);
     header("Location: all-users.php");
    }
  ?>
  <?php include "footer.php";?>