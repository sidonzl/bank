<?php
require "protect.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Issue Loan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>
<body>
<?php  require "navbar.php";?>
<div class="container" style="margin-top: 70px;">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAMES</th>
            <th>NATIONAL ID</th>
            <th>PHONE</th>
            <th>AMOUNT</th>
            <th>BALANCE</th>
        </tr>
        </thead>
        <tboby>

            <?php
            require "connect.php";
            $query = "SELECT loans.*, customers.* FROM customers JOIN loans on customers.customer_id=loans.customer_id WHERE  loans.balance>0";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_assoc($result)) {
                extract($row);
                echo "<tr>
                    <td>$loan_id</td>
                    <td>$names</td>
                    <td>$natid</td>
                    <td>$phone</td>
                    <td>$amount</td>
                    <td>$balance</td>
                    <td><a class='btn btn-warning btn-sm' href='repay.php?loan_id=$loan_id&customer_id=$customer_id&names=$names&balance=$balance'>Repay</a></td>
                  </tr>";
            }
            ?>

        </tboby>
    </table>


</div>


</body>
</html>