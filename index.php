<?php
    session_start();

    if (!$_SESSION['loggedIn'] || $_GET['logout']) {
        $_SESSION['loggedIn'] = false;
        header("Location: login.php");
    }
?>

<div>
    <p> 
        Hi, you are logged in!
    </p>
    <form>
        <button type="submit" name="logout" value="true"> Logout </button>
    </form>
</div>
