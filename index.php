<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            justify-content:start;
            align-content:baseline;
            align-items:center;
            flex-direction: column;
            
            
         
        }
        input{
           width:500px;
           border: none;
            background-color:#badaf5;
            height: 30px;

        }
        label{
            display: flex;
            align-items: first baseline;
        }

        #login{
            background-color: #74992e;
            color: white;
            height:30px;
            border: none;
            border-radius: 10px;
        }
        h1{
            color:#74992e;
        }
        #mar-rit{
            margin-right: 440px;
          
        }
        #mar-rit1{
            margin-right: 474px;
        }
        #mar-rit2{
            margin-right: 465px;
        }
        #mar-rit3{
            margin-right: 465px;
        }
       

    </style>
</head>
<body>
<div>
<form action="index.php" method="POST">
    <h1>Login Form</h1><br>
<label id="mar-rit">Username:</label>
<input  type="text" name="username" placeholder="Username"><br>
<label id="mar-rit2">Email:</label>
<input type="text" name="email" placeholder="Email"><br>
<label id="mar-rit3">Email:</label>
<input type="password" name="password" placeholder="Password"><br>
<input id="login" type="submit" name="login" value="login">
</form>
</div>
</body>
</html>

<?php
if(isset($_POST["login"])){
   
   
    if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["username"])){
        $_SESSION["username"]= $_POST["username"];
        $_SESSION["password"]= $_POST["password"];
        $_SESSION["email"]= $_POST["email"];
        header("Location: home.php");
       
    }
    else{
        echo "Please fill all the fields";
    }



}

?>
