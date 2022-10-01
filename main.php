<?php
    session_start();
    if($_SESSION['uname']){
        
    }else{
        header('location: login.php');
    }

    if($url[0] == 'dashboard'){
        $dashboard = 'active';
        echo "<title>Dashboard | Kiri Hospital</title>";
    }
    
    else if($url[0] == 'drugs'){
        $drugs = 'active';
        echo "<title>Drugs | Kiri Hospital</title>";
    }

    else if($url[0] == 'addDrug'){
        $addDrug = 'active';
        echo "<title>Add Drugs | Kiri Hospital</title>";
    }

    else if($url[0] == 'addDrug'){
        $addDrug = 'active';
        echo "<title>Add Drugs | Kiri Hospital</title>";
    }

    else if($url[0] == 'patient'){
        $patient = 'active';
        echo "<title>Patients | Kiri Hospital</title>";
    }

    else if($url[0] == 'addPatient'){
        $addPatient = 'active';
        echo "<title>Add Patients | Kiri Hospital</title>";
    }

    else if($url[0] == 'medication'){
        $medication = 'active';
        echo "<title>Medication | Kiri Hospital</title>";
    }

    else if($url[0] == 'addMedication'){
        $addMedication = 'active';
        echo "<title>Add Medication | Kiri Hospital</title>";
    }
?>
<?php include('includes/header.php'); ?>

    <!-- ============ Main Parent Body Container -->
    <div class="mainContainer">
        <div class="container-fluid">
            <div class="row">
                <!-- ============ Left Side ============ -->
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 leftNavSection">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 topLeftLogo">
                            <h2>Kiri Hospital</h2>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 menuBox">
                            <?php include('pages/menu.php'); ?>
                        </div>
                    </div>
                </div>

                <!-- ============ Right Side ============ -->
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                    <div class="row">
                        <!-- ============ Top Nav =========== -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 topNavSection">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 topNavLeftSection">
                                    <h1>Welcome</h1>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 topNavRightSection">
                                    <img src="assets/propic.png" alt="profile picture" width="50px" height="50px" style="border-radius:50%;">
                                    <h1><?php echo $_SESSION['uname']; ?></h1>
                                </div>
                            </div>
                        </div>

                        <!-- Main Dynamic Section -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 dynamicBodyBox">
                            <?php include($pages);?>
                        </div>

                        <!-- ============ Footer Section -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footerSection">
                            2021 All Rights Reserve.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>