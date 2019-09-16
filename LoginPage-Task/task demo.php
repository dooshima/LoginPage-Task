<?php
function check_password($username, $password){
    $pwd_file = 'auth.txt';
    if(!$fh = fopen($pwd_file, "r")) {die("<p>Could not open password file");}
    $match = 0;
    $pwd = md5($password);
    while(!feof($fh)) {
      $line = fgets($fh, 4096);
      $user_pass = explode(":", $line);
      if($user_pass[0] == $username) {
        if(rtrim($user_pass[1]) == $pwd) {
          $match = 1;
          break;
        }
      }
      $match = 2; 
    }
    if($match == '1') {
       echo "<b>Login Success!</b>";
    } 
    if($match == '2') {
       echo "<b>Login Failed!</b>";
    } 
    fclose($fh);
}
if($_POST['username']) {
    check_password($_POST['username'], $_POST['password']);
}
?>
?>