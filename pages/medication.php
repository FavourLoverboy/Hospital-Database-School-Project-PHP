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

<div class="row">
    <div class="col-md-12 middle no-space">
        <h1><?php echo $_SESSION['name']; ?> Medication</h1>
    </div>
</div>

<div class="row no-space">
    <div class="col-md-2" style="margin-bottom:15px;">
        <a href="addMedication" class="btn btn-primary">Add Medication</a>
    </div>
</div>

<table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Drug Name</th>
                <th>Dosage</th>
                <th>Prescription</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $tblquery = "SELECT * FROM medication WHERE name = '$_SESSION[name]' ORDER BY date";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    foreach($select as $data){
                        extract($data);
                        ?>
                        <?php
                            echo "
                                <tr>
                                    <td>$drug</td>
                                    <td>$dosage</td>
                                    <td>$prescription</td>
                                    <td>$date</td>
                                    <td>
                                        <form action='medication' method='POST'>
                                            <input type='hidden' name='id' value='$id'>
                                            <input type='submit' name='remove' class='btn btn-default' value='remove'>
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
    if($_POST['remove']){

        extract($_POST);


        $tblquery = "DELETE FROM medication WHERE id = :id";
        $tblvalue = array(
            ':id' => htmlspecialchars($id)
        );
        $delete = $collect->tbl_delete($tblquery, $tblvalue);
        if($delete){
            echo "
                <div class='alert alert-success border border-1 alert-dismissible fade show rounded text-muted text-center' role='alert'>
                    Medication has been deleted.
                </div>
            ";
        }
    }
?>