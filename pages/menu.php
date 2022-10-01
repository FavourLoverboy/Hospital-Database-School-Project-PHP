    <ul>        
        <?php 
            if($_SESSION['uname']){
            ?>
                <li class="<?php echo $cashiers; ?>">
                    <a href="dashboard">
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo $cashiers; ?>">
                    <a href="drugs">
                        <span class="title">Drugs</span>
                    </a>
                </li>
                <li class="<?php echo $cashiers; ?>">
                    <a href="patient">
                        <span class="title">Patient</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="title">Logout</span>
                    </a>
                </li>

            <?php
            }
        ?>
    </ul>



    <ul>        
        <?php 
            if($_SESSION['position'] == 'Rep'){
            ?>
                <li class="<?php echo $dashboard; ?>">
                    <a href="repdashboard">
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo $sales; ?>">
                    <a href="sales">
                        <span class="title">Make Sales</span>
                    </a>
                </li>
                <li class="<?php echo $mySales; ?>">
                    <a href="mysales">
                        <span class="title">My Sales</span>
                    </a>
                </li>
                <li class="<?php echo $checkItems; ?>">
                    <a href="checkitems">
                        <span class="title">View Products</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="title">Logout</span>
                    </a>
                </li>
            <?php
            }
        ?>
    </ul>
    