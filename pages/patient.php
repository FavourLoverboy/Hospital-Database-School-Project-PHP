<div class="row">
    <div class="col-md-12 middle no-space">
        <h1>Patients Table</h1>
    </div>
</div>

<div class="row no-space">
    <div class="col-md-2" style="margin-bottom:15px;">
        <a href="addPatient" class="btn btn-primary">Add new Patient</a>
    </div>
</div>

<table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Patient Names</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Ward Number</th>
                <th>Description</th>
                <th>Medication</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $tblquery = "SELECT * FROM patient ORDER BY name";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    foreach($select as $data){
                        extract($data);
                        ?>
                        <?php
                            echo "
                                <tr>
                                    <td>$name</td>
                                    <td>$sex</td>
                                    <td>$age</td>
                                    <td>$height</td>
                                    <td>$weight</td>
                                    <td>$ward_number</td>
                                    <td>$issue</td>
                                    <td>
                                        <form action='patient' method='POST'>
                                            <input type='hidden' name='id' value='$id'>
                                            <input type='submit' name='add' class='btn btn-default' value='add'>
                                        </form>
                                    </td>
                                </tr>
                            ";
                    }
                ?>
            </tr>
        </tbody>
    </table>

<?php
    if($_POST['add']){

        extract($_POST);
        $_SESSION['id'] = $id;
        
        echo '<script> window.location="http://localhost/kiri/medication"; </script>';
    }
?>