<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Micro_Bank</a>
        </div>
        <ul class="nav navbar-nav">
<!--            <li class="active"><a href="#">Home</a></li>-->
            <li><a href="customer.php">New Customer</a></li>
            <?php if($_SESSION["type"]==1):   ?>
            <li><a href="register.php">New User</a></li>
            <li><a href="users.php">View Users</a></li>
            <?php endif;?>
            <li><a href="issue.php">Issue Loan</a></li>
            <li><a href="pending.php">Pending Loans</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?=$_SESSION["names"]?></a></li>
            <li><a href="logout.php">Logout</a> </li>
        </ul>
    </div>
</nav>
