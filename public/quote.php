
<?php
 
    //include functions.php
    require("../includes/functions.php");
    
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {     
        //look up the quote throw yahoo
        $output = lookup($_POST["quote"]);
    
        //check if the output is null
        if($output === false) 
        {
            apologize("Invalid Symbol");
        }
       
        //send the output to the latestprice.php template
        render("latestprice.php" , ["title"=>"Info" , "output"=>$output]);
    } 
    else
    {
        //send user to the quote_form.php 
        render("quote_form.php" , ["title" => "Quote"]);
    }   
?>
