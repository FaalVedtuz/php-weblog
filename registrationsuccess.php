<?php
    require './includes/header.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $password = password_hash($_POST['pword'],PASSWORD_DEFAULT);
    $register_user = new register();
    /* insert details into userlist table   */
    
    if($register_user::reg_user($firstname,$lastname,$email,$username,$password)){
        $msg = "Registration successfull!";
    }
?>

<main>
    <h3><?php echo $msg ?></h3>
</main>
<?php require './includes/footer.php'; ?>