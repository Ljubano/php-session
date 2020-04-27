<?php
session_start();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        $user_password = 'devplan';
    	if ($_POST['password'] == $user_password) {
            $_SESSION['loggedIn'] = true;
            header("Location: index.php");
    	}
    }

    print('HINT: try with \'devplan\'');
}
?>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Submit">
</form>