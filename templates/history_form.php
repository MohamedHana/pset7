        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Transaction</th>
                            <th>Date/Time</th>
                            <th>Symbol</th>
                            <th>Shares</th>
                            <th>Price</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        <?php foreach($history as $row):?>
                            <tr class="info"> 
                                <th><?= $row["type"]?></th>
                                <th><?= $row["time"]?></th>
                                <th><?= $row["symbol"]?></th>
                                <th><?= $row["shares"]?></th>
                                <th><?= $row["price"]?></th>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>

<br/>
<div> 
   <form action="index.php">
     <button type="submit" class="btn btn-primary btn-outline"><span class="glyphicon glyphicon-home"></span> Go Home</button>
   </form> 
</div>

