
    <ul class="nav nav-pills">
        <li><a href="quote.php">Quote <span class="glyphicon glyphicon-align-left"></span></a></li>
        <li><a href="buy.php">Buy <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        <li><a href="sell.php">Sell <span class="glyphicon glyphicon-usd"></span></a></li>
        <li><a href="history.php">History <span class="glyphicon glyphicon-briefcase"></span></a></li>
       <!-- <li><a href="logout.php"><strong>Log Out</strong></a></li> -->
    </ul>

<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Symbol</th>
                    <th>Name</th>
                    <th>Shares</th>
                    <th>Price</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
                <tbody>
                   <?php foreach ($positions as $position): ?>
                     <tr>
                       <th><?= $position["symbol"] ?></th>
                       <th><?= $position["name"] ?></th>
                       <th><?= $position["shares"] ?></th>
                       <th><?= $position["price"] ?></th>
                       <th><?= $position["price"] * $position["shares"] ?></td>   
                     </tr>
                   <?php endforeach ?>  
                   <tr>
                    <th colspan="4">CASH</th>
                    <th><?= $values["cash"] ?></th>
                   </tr>
                </tbody>
        </table>
    </div>
    <!-- /.table-responsive -->
</div>
<div> 
   <form action="logout.php">
     <button type="submit" class="btn btn-danger btn-outline">Logout <span class="glyphicon glyphicon-log-out"> </span></button>
   </form> 
</div>
