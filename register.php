<?php
    require './includes/header.php';
?>

    <p>Sample Registration</p>
    <form method="POST" action="registrationsuccess.php">
        <label for="fname">First name: </label><input type="text" name="fname" required><br />
        <label for="lname">Last name: </label><input type="text" name="lname" required><br />
        <label for="email">Email: </label><input type="email" name="email" required>
        <br />
        <label for="uname">Username : </label><input type="text" name="uname" required><br />
        <label for="pword">Password : </label><input type="password" name="pword" required>
        <br />
        <input type="submit" name="submit" value="Register">
    </form>

<?php
    require './includes/footer.php';
?>