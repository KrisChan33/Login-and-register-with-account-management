<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Login</title>
</head>

<body>
   

    <div class="container-fluid">
           
    <section style="width: fit-content; position:fixed;" class="container">

            <?php
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo '<div style = "position:absolute; right:3%;left:48%;" class=" alert alert-danger alert-dismissible fade show" role="alert">
                <strong>'.$msg.'</strong> Username or Password is Incorrect.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                 </div>';
                }

            if(isset($_GET['registermsg'])){
                    $registermsg=$_GET['registermsg'];
                    echo'<div style = "position:absolute; right:3%;left:48%;" class=" alert alert-success alert-dismissible fade show" role="alert">
                   <strong>'.$registermsg.'</strong> saved in database
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                    </div>';
                   }
                   
          if(isset($_GET['registermsgf'])){
                    $registermsgf=$_GET['registermsg'];
                    echo'<div style = "position:absolute; right:3%;left:48%;" class=" alert alert-success alert-dismissible fade show" role="alert">
                   <strong>'.$registermsgf.'</strong> saved in database
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                    </div>';
                   }
        ?>
        <div class="container" style="height: 400px; width:400px;  margin-left:350px; margin-top: 120px;">
           
            <form action="Login_code.php" method="post" role="form" class="border border-info rounded " align="center">
                   <h3 class="pt-3 pb-3 bg-info text-white">LOGIN</h3>
                <div class="form-group pt-3 ">
                    <label for="user">Username:</label> <input type="text" name="username" value="" placeholder="Your Username" required>
                </div>

                <div class="form-group">
                    <label for="pass">Password:</label> <input type="password" name="password" value="" placeholder=" Your Password" required>
                
                </div>
                <div class="button">
                

                    <button class="btn btn-danger mt-2 mr-4  mb-4" name="clear" type="reset">Clear</button>

                    <button class="btn btn-info mt-2 ml-3 mb-4" id="login" name="login" type="submit">Login</button>
        
                </div>

                <p>not a member?<a href="Register.php"><span> Sign-up</span> </a></p>

            </form>
        </div>
</section>


    </div>
</body>
</html>