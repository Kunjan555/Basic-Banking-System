

<?php
  include 'style.php';
?>



	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br><br><br><br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<br><br><br>
<br><br><br>
<div id="container">
    <div id="header">© 2022. Made by Joshi Kunjan <br>
      For the Project of The Sparks Foundation</div>
 </div>

</body>
</html>