<?php
    
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        
        //check if the user enter his name
        if(empty($_POST["username"]))
        {
            apologize("Plz, enter your name!!");
        }
        //check for email
        else if(empty($_POST["email"]))
        {
            apologize("Plz, enter your email!!");
        }
        //check if the user enter his password
        else if(empty($_POST["password"]))
        {
            apologize("Plz, enter your password!!");
        }
        //check if the user retype the right password
        else if($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Password not match!!");
        }
        
        //insert new data into users table
        $success = query("INSERT INTO users (username,email, hash, cash) VALUES(?, ?,?, 10000.0000)", $_POST["username"],$_POST["email"],crypt($_POST["password"]));
        
        //if query returns false
        if($success === false)
        {
            apologize("Username already taken, please choose another one");
        }
        
        //save the user id 
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        //store user id in current session 
        $_SESSION["id"] = $id;
        
        //redirect user to index.php
        redirect("index.php");
        
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
