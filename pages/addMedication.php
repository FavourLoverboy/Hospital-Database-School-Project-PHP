<?php 
    $tblquery = "SELECT * FROM patient WHERE id = '$_SESSION[id]'";
    $tblvalue = array();
    $select = $collect->tbl_select($tblquery, $tblvalue);
    if($select){
        foreach($select as $data){
            extract($data);
            ?>
            <?php
            $_SESSION['name'] = $name;
    
        }
    }
?>

<?php 

    if($_POST['add']){
        extract($_POST);

        $tblquery = "INSERT INTO medication VALUES(:id, :name, :drug, :dosage, :prescription, 
        :date)";
        $tblvalue = array(
            ':id' => null,
            ':name' => htmlspecialchars(ucwords($pn)),
            ':drug' => htmlspecialchars(ucwords($dn)),
            ':dosage' => htmlspecialchars($d),
            ':prescription' => htmlspecialchars(ucfirst($p)),
            ':date' => date("Y-m-d")
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
            echo '<script> window.location="http://localhost/kiri/addMedication/added"; </script>';
        }else{
            echo "
                <div class='alert alert-danger alert-dismissible fade show text-dark text-center' role='alert'>
                    An error occur while performing this task.
                </div>
            ";
        }
    }
    if($url[1] == "added"){
        echo "
            <div class='alert-msg-s'>
                Medication has been taking.
            </div>
        ";
    }
?>

<div class="row">
    <div class="col-md-12 middle no-space">
        <h1>Add Medications</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="background:#fff;padding:20px;">
        <form action="addMedication" method="POST" class="insert">
            <div class="row mp">
                <div class="col-md-6 box1 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <label for="names">Patient Name:</label>
                            <input type="text" name="pn" id="names" value="<?php echo $_SESSION['name']; ?>" readonly>
                            <label for="h">Dosage:</label>
                            <input type="text" name="d" id="h" placeholder="Enter quantity" required>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box2 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <label for="dn">Drug Name:</label>
                            <select name="dn" id="dn" required>
                                <option value="">Select Drug</option>
                                <?php 
                                    $tblquery = "SELECT * FROM drugs GROUP BY drug_name ORDER BY drug_name";
                                    $tblvalue = array();
                                    $select = $collect->tbl_select($tblquery, $tblvalue);
                                    if($select){
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <option value='$drug_name'>$drug_name</option>
                                                ";
                                        }
                                    }
                                ?>
                            </select>
                            <label for="w">Prescription:</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="p" id="cd" placeholder="Enter drug prescription" required style="width:530px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2 mp submit">
                    <input type="submit" name="add" class="btn btn-primary" value="Add">
                </div>
            </div>
        </form>
    </div>
</div>