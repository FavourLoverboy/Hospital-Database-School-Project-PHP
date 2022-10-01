<?php 

    if($_POST['add']){
        extract($_POST);

        $tblquery = "INSERT INTO drugs VALUES(:id, :drug_name, :man, :man_date, :exp_date, :qty, 
        :cost, :date)";
        $tblvalue = array(
            ':id' => null,
            ':drug_name' => htmlspecialchars(ucwords($n)),
            ':man' => htmlspecialchars(ucwords($m)),
            ':man_date' => htmlspecialchars($md),
            ':exp_date' => htmlspecialchars($ed),
            ':qty' => htmlspecialchars($q),
            ':cost' => htmlspecialchars($c),
            ':date' => date("Y-m-d")
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
            echo '<script> window.location="http://localhost/kiri/addDrug/added"; </script>';
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
                New Drug has been added.
                <a href='drugs' class='btn btn-success'>Back</a>
            </div>
        ";
    }
?>

<div class="row">
    <div class="col-md-12 middle no-space">
        <h1>Add Drug</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="background:#fff;padding:20px;">
        <form action="addDrug" method="POST" class="insert">
            <div class="row mp">
                <div class="col-md-6 box1 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <label for="names">Drug Name:</label>
                            <input type="text" name="n" id="names" placeholder="Enter drug name" required>
                            <label for="h">Quantity:</label>
                            <input type="text" name="q" id="h" placeholder="Enter quantity" required>
                            <label for="c">Cost:</label>
                            <input type="text" name="c" id="c" placeholder="Enter cost of drug" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box2 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <label for="e">Manufacturer:</label>
                            <input type="text" name="m" id="e" placeholder="Enter manufacturer name" required>
                            <label for="w">Manufacture Date:</label>
                            <input type="date" name="md" id="w" placeholder="Enter date manufactured" required>
                            <label for="o">Expiring Date:</label>
                            <input type="date" name="ed" placeholder="Enter date of expiration" required>
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