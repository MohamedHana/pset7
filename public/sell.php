<?php
    // configuration
    require("../includes/config.php");
    
    $rows = query("select * from users_data where id = ? ", $_SESSION["id"]);
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {  
        //check if the user didn't choose any thing
        if($_POST["choose"]== "no")
        {
           apologize("You must have at least one stock to sell!!");
           exit;
        }      
        //check if the user chooses all stocks
        else if( $_POST["choose"] == "all")
        {
            //get all stocks prices the user had
            $sumsells = sum_prices($_SESSION["id"]);
            
            //get the user cash 
            $user = query("select * from users where id = ? " , $_SESSION["id"] );
            
            //calculate the user cash after he sell all stocks
            $newcash = $sumsells + $user[0]["cash"];
            
            //get all sold stocks shares
            $shares = query("select sum(shares) as shares from users_data where id = ? ", $_SESSION["id"]);            
            
            //insert transaction info into history table
            query("insert into history(id,type,symbol,shares,price,time) values(?,?,?,?,?, now())",$_SESSION["id"],"Sell","All",$shares[0]["shares"],$sumsells);                        
            
            //renew the user cash in database
            query("update users set cash = ".$newcash." where id = ? " , $_SESSION["id"] );
            
            //delete user stocks from database
            query("delete from users_data where id = ? ", $_SESSION["id"]);
            
           //send message to the user
            $title = "Success Process";
            $subject = "Invoice";
            $message = "Hi, ".$user[0]["username"].". We would like to inform you that your last sell operation have been done successfully.
                        You sold All elements you have from All stocks  
                        and gain total profit (". $sumsells." $). We are so happy to buy your products. Thanks for trustness, Mohamed";
                        
            email( $user[0]["email"] , ["message"=> $message , "title"=> $title , "subject"=> $subject]);            
             
            //go to home page
            redirect("/index.php");
        }
        //check if the user shoose a stock
        else if(!empty($_POST["choose"]))
        {   
            //get the number of shares that user have for this stock
            $shares = query("select shares as shares from users_data where id = ? and symbol = ? ", $_SESSION["id"] , $_POST["choose"]);
             
            //get th price of the stock
            $price = lookup($_POST["choose"]);  
            
            //calculate the total price of the whole shares of the stock
            $total = $shares[0]["shares"] * $price["price"];
            
            //get the user cash
            $user = query("select * from users where id = ? " , $_SESSION["id"]);
            
            //insert transaction info into history table
            query("insert into history(id,type,symbol,shares,price,time) values(?,?,?,?,?, now())",$_SESSION["id"],"Sell",$_POST["choose"],$shares[0]["shares"],$price["price"]);            
            
            //the user new cash after sell
            $total = $total + $user[0]["cash"];
            
            //renew the user cash
            query("update users set cash = ? where id = ? " , $total , $_SESSION["id"]);  
            
            //delete the stock from database
            query("delete from users_data where id = ? and symbol = ?" ,$_SESSION["id"] , $_POST["choose"]);             
            
            //send message to the user
            $title = "Success Process";
            $subject = "Invoice";
            $message = "Hi, ".$user[0]["username"].". We would like to inform you that your last sell operation have been done successfully.
                        You sold (".$shares[0]["shares"].") elements from stock ".$_price["name"]."(".$_POST["choose"].") 
                        and gain (".$price["price"]." $) for each element and total profit (". $shares[0]["shares"] * $price["price"]." $). We are so happy to buy your products and we hope make another deal with you. Thanks for trustness,        Mohamed";
                        
            email( $user[0]["email"] , ["message"=> $message , "title"=> $title , "subject"=> $subject]);
                        
            //go to home page
            redirect("/index.php");           
 
        }
        
    }
    else
    {
        render("sell_form.php" , ["rows"=> $rows , "title"=>"Sell"]);   
    }
        
?>
 
