<?php
    // configuration
    require("../includes/config.php");
    
    //get all data from history table
    $history = query("select * from history where id = ?", $_SESSION["id"]);
    
    //send history data to history form to be shown
    render("history_form.php" , ["title"=>"History" ,"history"=>$history]);
    
        
?>
