<div class="row">
    <div class="col-md-12 middle no-space">
        <h1>Drugs Table</h1>
    </div>
</div>

<div class="row no-space">
    <div class="col-md-2" style="margin-bottom:15px;">
        <a href="addDrug" class="btn btn-primary">Add new Drug</a>
    </div>
</div>

<table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Drug Names</th>
                <th>Manufacturer</th>
                <th>Date Manufactured</th>
                <th>Exp Date</th>
                <th>Qty</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $tblquery = "SELECT sum(qty) AS total, drug_name, man, man_date, exp_date, cost FROM drugs GROUP BY drug_name ORDER BY drug_name";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    foreach($select as $data){
                        extract($data);
                        ?>
                        <?php
                            echo "
                                <tr>
                                    <td>$drug_name</td>
                                    <td>$man</td>
                                    <td>$man_date</td>
                                    <td>$exp_date</td>
                                    <td>$total</td>
                                    <td>$cost</td>
                                </tr>
                            ";
                    }
                ?>
            </tr>
        </tbody>
    </table>