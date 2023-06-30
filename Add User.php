<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body >
<section class="py-5" >
<div class="container">
    <div class="row justify-content-center rounded">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header bg-info">
                    <h3 class="text-center text-dark text-white ">Registration Form</h3>   
              </div>
                    <form action="Add_User_Code.php" method="post">
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
                                

                                <div class="row text-center">
                                <div class="col-md-6">
                                <a href="Dashboard.php" class="btn mt-3 btn-danger" name="clear" type="Cancel">Cancel</a>

                                </div>

                                <div class="col-md-6 mt-3">
                                <button class="btn btn-primary text-white" name="Register"  type="submit">Register</button>
                                    
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