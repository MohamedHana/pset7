<?php

    // configuration
    require("../includes/config.php"); 
    
        //array holds the full data of user
        $positions = [];
        
        //get all stocks that user participate in
        $rows = query("select * from users_data where id = ? " , $_SESSION["id"]);
        
        //get the user cash
        $cashs = query("select cash from users where id = ? " , $_SESSION["id"]);
        $cash = implode("" , $cashs[0]);
        
        //modify data by looking it up and it's price in yahoo then store it in distination
        foreach ($rows as $row)
        {
            $stock = lookup($row["symbol"]);
            if ($stock !== false)
            {
                $positions[] = [
                    "name" => $stock["name"],
                    "price" => $stock["price"],
                    "shares" => $row["shares"],
                    "symbol" => $row["symbol"]
                ];
            }
        }    
    // render portfolio
    render("portfolio.php", ["positions" => $positions, "title" => "Portfolio" , "cash"=>$cash]);

?>
