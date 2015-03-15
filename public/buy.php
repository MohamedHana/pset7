<?php 
    //configuration
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {  
        //check if user didn't insert symbol
        if(empty($_POST["symbol"]))
        {
            apologize("Please, insert the stock symbol");
        }
        
        //check if user didn't determine number of shares 
        if(empty($_POST["shares"]))
        {
            apologize("Please, determine the number of shares for the ".$_POST["symbol"]." stock");
        }
        
        if(!preg_match("/^\d+$/", $_POST["shares"]))
        {
            apologize("Please, enter a non-negative integer number without fractions!!");
        }
        
        //check if the user choose a right symbol
        $check = lookup($_POST["symbol"]);
        
        if(empty($check))
        {
            apologize("Not valid symbol. Please, enter a vaild symbol!!");
        }
        
        //calculate the whole buy price 
        $price = $check["price"] * $_POST["shares"];
        
        //check if the user have enough cash  
        $user = query("select * from users where id = ? ", $_SESSION["id"]);
                
        if( $user < 0)
        {
            apologize("You don't have enough money. Please, charge your balance!!");
        }
        else
        {
            //update user cash
            query("update users set cash = ? where id = ? ", ($user[0]["cash"]-$price) , $_SESSION["id"]);
        }
        
        //check if user have previous shares of this stock
        $output = query("select shares as shares from users_data where id = ? and symbol = ? ", $_SESSION["id"] , $_POST["symbol"]);
        
        //no previous stocks
        if(empty($output))
        {
            query("insert into users_data(id,symbol,shares) values(?,?,?) ", $_SESSION["id"] , $_POST["symbol"] , $_POST["shares"]);       
        }
        //stock already exist
        else
        {
           $totalshares = $output[0]["shares"] + $_POST["shares"];
            query("update users_data set shares = ? where id = ? and symbol = ? ", $totalshares , $_SESSION["id"] , $_POST["symbol"]);
        }
        
        //insert transaction info into history table
        query("insert into history(id,type,symbol,shares,price,time) values(?,?,?,?,?, now())",$_SESSION["id"],"Buy",$_POST["symbol"],$_POST["shares"],$check["price"]);        
        
        //send message to the user
        $title = "Success Process";
        $subject = "Invoice";
        $message = "Hi, ".$user[0]["username"].". We would like to inform you that your last buy operation have been done successfully.
                    You purchase (".$_POST["shares"].") elements from stock ".$check["name"]."(".$_POST["symbol"].") 
                    which cost you (".$check["price"]." $) for each element and total cost (".$price." $). We are so happy to sell our products to you and we hope you enjoy it.Thanks for trustness, Mohamed";
                    
        email( $user[0]["email"] , ["message"=> $message , "title"=> $title , "subject"=> $subject]);
        
        //go to home page
        redirect("/index.php");        
    }
    else
    {      
        //send user to buy form
        render("buy_form.php" , ["title" => "Buy"]);
    }
    
?>
