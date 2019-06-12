<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <header>
        <h1>Public Facing Page</h1>
    </header>
    <main>
        <p>Anyone can see this page.</p>
        <p><a href="login.php">Login</a></p>
        
        <?php
        if( isset($_SESSION['user_id'])){
        ?>
        <p>Go to the <a href="private.php">PRIVATE PAGE</a>.</p>
        <?php
        }
        ?>
        
    </main>
</body>
</html>