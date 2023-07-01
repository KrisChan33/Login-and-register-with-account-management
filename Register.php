<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body >
<section class="py-5" >
<div class="container">
    <div class="row justify-content-center rounded">
        <div class="col-md-6">
            <?php
            if (isset($_GET['mismatch'])){
                $mismatch = $_GET['mismatch'];
                echo'<div class=" alert alert-warning alert-dismissible fade show" role="alert">
                <strong>'.$mismatch.'</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                 </div>';
            }
            
            
            
            ?> 
            <div class="card ">
                <div class="card-header bg-info">
                    <h3 class="text-center   text-white ">Registration Form</h3>   
              </div>
                    <form action="register_code.php" method="post">
                        <div class="card-body">
                            <div class="row">

                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Firstname">Username:</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter Username" required> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Firstname">Firstname:</label>
                                        <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" required> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Lastname">Lastname:</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname" required> 
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Email">Email ID:</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email Address" required> 
                                    </div>
                                </div>
                                

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" name="passwords" placeholder="Enter Password" required> 
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password:</label>
                                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required> 
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="Login.php" class="btn btn-danger ml-5 mr-5 " name="clear" type="Cancel">Cancel</a>
                                <button class="btn btn-primary text-right ml-5" name="Register"  type="submit">Register</button>
                            
                            </div>

   
           
         

            

        </div>
        </div>
                                

                        

                                
                            
                            </div>
                        </div>
                    </form>
                </div>
        </div>

    </div>

      










</div>
</section>

</body>




</html>