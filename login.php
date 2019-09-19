<?php
$name_error ='';
$email_error ='';

$output = '';

if(isset($_POST["submit"])){
    if(empty($_POST["name"])){
        $name_error ='<p> Please enter your name </p>';
    }else{
        if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
            $name_error ='<p> Only letter whitespace are not allowed</p>';
        }
    }
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_error ='<p> Invalid Email </p>';
    }
    
    if($name_error =="" && $email_error == ""){
      $output ='  
       <p> <label> Output </label></p>
      <p> Your name is '.$_POST["name"].'</p>
      <p> Your email is '.$_POST["email"].'</p>

      ';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A-Team Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand order-1"  href="#">The A-Team</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" ><i class="fa fa-home"></i> Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa fa-address-book"></i> Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa fa-database"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" ><i class="fa fa-desktop"></i> Our Team</a>
                </li>
            </ul>
                </div>
    </nav>




    <div class="container">
    
      <div class="p-5 parent d-flex justify-content-center align-items-center">
        <div class="row insideParent">
            <div class=" h-100 col-6 px-0">
                <img src="https://res.cloudinary.com/dev-sam/image/upload/v1568666069/domenico-loia-EhTcC9sYXsw-unsplash_clm1f6.jpg" alt="Login" height="100%" width="100%">
            </div>
            <div class="bg-info h-100 col-6">
                <h4>Welcome Back, Please Login
                    <br> To Your Account
                </h4>
             <form action = "" method ="post">
                <label for="name"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="name" required/>
                <span class="text-danger"> <?php echo $name_error; ?> </span>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required/>
                <span class="text-danger"> <?php echo $email_error; ?> </span>
                <br/>  <br/>



                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required/>
                <br/> <br/>


    
                <button type="submit" name="submit">Login</button><br/>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <div> <?php echo $output; ?></div>


</form>
            </div>
        </div>
      </div>

    </div>

   



<!-- Script  -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- End of script -->
</body>
</html>