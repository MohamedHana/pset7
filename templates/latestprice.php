
<?php
    print("<strong>".$output["name"]."(".$output["symbol"].") ".number_format($output["price"], 2)." $</strong>");
?>
<br/>
<br/>
<div> 
   <form action="index.php">
     <button type="submit" class="btn btn-primary btn-outline"><span class="glyphicon glyphicon-home"></span> Go Home</button>
   </form> 
</div>



