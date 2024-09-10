<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Enter Password:</label><br>
   <input type="password" name="password"><br><br>
   <input type="submit" name="login" value="Login"><br>
    </form>
</body>
</html>


<?php

// Generate the password hash (do this only once and store the result securely)
$password = "dipendra123@";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo "Hashed password: $hashed_password";

// Store the hashed password securely, e.g., in a database or a secure file

// Later, when the user submits the form
if(isset($_POST["login"])){
    $input_password = $_POST["password"];

    if(empty($input_password)){
        echo "Enter password";
    } else {
        // Retrieve the stored hashed password from the secure storage
        $stored_hashed_password = "..."; // retrieve the hashed password from storage

        if(password_verify($input_password, $stored_hashed_password)){
            echo "You are logged in";
        } else {
            echo "Invalid password";
        }
    }
}

?>