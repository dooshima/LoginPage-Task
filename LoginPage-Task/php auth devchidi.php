

<?php  
    error_reporting(0); //I turned this off since we are not validating from a databasee ooh!! men! tHERE OTHER WAYS I Could go about this but ...what ever

      $file_name = 'auth.txt';
       //we want to create a file
      $rf = fopen($file_name, "r") or die("unable to open the file");
    //    we want to insert  our values in the username and pasword in the file we have create
  
//we're nothasing the passowrd so we won't use password_hash keyword
$submit = $_POST['Submit'];
$user = $_POST['user'];
$pass = $_POST['pw'];
      while(!feof($rf)) {
          
          $word_by_word =fgets($rf, 40000);//  specifies where and how we want to get the strings 
         
          $break_rf_into_array = explode( "+", $word_by_word);

          $op = $break_rf_into_array[0] == $user;
          $oq = $break_rf_into_array[1] == $pass;

          
          $opNil = $break_rf_into_array[0] != $user;
          $oqNil = $break_rf_into_array[1] != $pass;
        $msg = "";
          if ($opNil || $oqNil) {
              $msg= "Incorrect login details";
          }

          if ($op && $oq) {
              $msg = "loggin successful!";
          }
          break;
      }
    
    fclose($rf);
      // lets loop through the file (auth.txt) and see see if password macthed


    //   if (!$fh) {
    //  die ("<p> Could not open the file</p>");
    //   }
    //   $itMatches = 0;
    //   // We get the password hashed first
    //   $pw = password_hash($password, PASSWORD_BCRYPT);
   
    // if ($_POST['user']) {
    //     checkForPassword($_POST['user'], $_POST['pw']);
    // }

?>

<!Doctype html>
<html> 
    <head> 
        <title> Authentication </title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
    <form action="" method="POST">
       
        <?php 
 
        if (isset($submit) && isset($msg)) {
            ?> 
           <p style="color:red"> <?php echo $msg; ?> </p>
           
        <?php } ?>
        <label> username  </label>
        <input type="text" name="user">
        <br>
        <label> password  </label>
        <input type="password" name="pw">
        <br>
        <button type="submit" name="Submit"> Submit </button>

        <p> username is: admin 
            <br>
            password is: password
        </p>
    </form>
    </body>
</html>

