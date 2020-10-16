<?php include "db.php";?>\
<?php include "header.php";?>


  <?php
    if (isset($_POST['login'])) {
       $username= $_POST['username'];
       $password= $_POST['password'];
       echo $username . "<br/>".$password; 
    }



  ?>
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST" class="main-form">
                   <div class="form-group">
                    <h1>User Login</h1>
                   </div>

                   <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="">
                   </div>

                   <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="">
                   </div>
                    <button  type="submit" class="btn btn-primary" name="login">Log In</button>
                  
                
                </form>
            </div>
        </div>
    </section>

    <?php include "footer.php";?>