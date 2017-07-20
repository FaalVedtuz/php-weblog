<?php
    require './includes/header.php';
?>
        <main>

            <h1>Web Log</h1>
            <form method="POST" action="verifyuser.php">
                <input type="text" name="uname" placeholder="username" required>
                <input type="password" name="pword" placeholder="password" required>
                <br />
                <input type="submit" name="submit" value="Log In">
            </form>
            
        </main>

<!-- include footer.php goes here.. -->
<?php require './includes/footer.php'; ?>        
   