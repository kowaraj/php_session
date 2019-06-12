<?php
require_once('credentials.php');
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <header>
        <h1>Private Page #2</h1>
    </header>
    <main>
        <p><a href="logout.php">Logout</a></p>
        <p>You can only see this page if you have a valid PHP session on our web server.</p>
        <p>Your user ID  : <?php echo $_SESSION['user_id'];?></p>
        <p>Your password : <?php echo $_SESSION['user_pwd_'."{$uid}"];?></p>
    </main>
</body>
</html>