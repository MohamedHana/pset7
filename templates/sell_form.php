
   <form action="sell.php" method="post">
    <div>
       <select name="choose" class="form-control">
         <option name="no" value="no">  </option>
         <?php if(!empty($rows)):?>
         <option name="all" value="all"> All</option>
         <?php
            foreach ($rows as $row)
            {
               print("<option value=".$row["symbol"]." name=".$row["symbol"]." >".$row["symbol"] . "</option>");
            } 
         ?>
         <?php endif?>
       </select>   
     </div>
<br/>
     <div>
        <button type="submit" class="btn btn-outline btn-danger"><span class="glyphicon glyphicon-usd"></span> Sell <span class="glyphicon glyphicon-usd"></span></button> 
     </div> 
   </form>  
   <br/>
<div> 
   <form action="index.php" >
     <button type="submit" class="btn btn-primary btn-outline"><span class="glyphicon glyphicon-home"></span> Go Home</button>
   </form> 
</div>
 

