<div class="dynamicBodyNav">
   
</div>

<div class="row" style="padding:20px;">
    <div class="col-md-4" style="display:flex;justify-content:center;">
        <div class="row">
            <div class="col-md-11 bg-info" style="width:200px;height:200px;display:flex;justify-content:center;align-items:center;">
                <?php 
                    $tblquery = "SELECT count(id) as total FROM patient";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    if($select){
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                echo "
                                    <h3>Patients $total</h3>
                                ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4" style="display:flex;justify-content:center;">
        <div class="row">
            <div class="col-md-11 bg-warning" style="width:200px;height:200px;display:flex;justify-content:center;align-items:center;">
                <?php 
                    $tblquery = "SELECT count(id) as total FROM drugs";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    if($select){
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                echo "
                                    <h3>Drugs $total</h3>
                                ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4" style="display:flex;justify-content:center;">
        <div class="row">
            <div class="col-md-11 bg-danger" style="width:200px;height:200px;display:flex;justify-content:center;align-items:center;">
                <?php 
                    $tblquery = "SELECT count(id) as total FROM medication ";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    if($select){
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                echo "
                                    <h3>Medications $total</h3>
                                ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-md-12 middle no-space">
        <h3>Recent Patient</h3>
    </div>
</div>

<table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Ward Number</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $tblquery = "SELECT * FROM patient ORDER BY date DESC LIMIT 3";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    foreach($select as $data){
                        extract($data);
                        ?>
                        <?php
                            $all = $id + 1000;
                            echo "
                                <tr>
                                    <td>$all</td>
                                    <td>$name</td>
                                    <td>$sex</td>
                                    <td>$age</td>
                                    <td>$height</td>
                                    <td>$weight</td>
                                    <td>$ward_number</td>
                                    <td>$date</td>
                                </tr>
                            ";
                    }
                ?>
            </tr>
        </tbody>
    </table>