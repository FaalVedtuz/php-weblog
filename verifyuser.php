<?php
    require './includes/header.php';
    require './includes/dbcon.php';

    $log_user = new selectUser();
   if($log_user::user_select($_POST['uname'],$_POST['pword'])){
       $msg = "Log in succesfull";
   }else{
       $msg = "Username or password did not match";
   }
    
?>

<!-- html goes here -->
<main>
    <?php
        echo "<h3>$msg</h3>";
    ?>
</main>


<?php require './includes/footer.php'; ?>