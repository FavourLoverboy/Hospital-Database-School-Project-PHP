<?php 

    if($_POST['add']){
        extract($_POST);

        $tblquery = "INSERT INTO patient VALUES(:id, :name, :issue, :sex, :age, :height, :weight, 
        :ward_number, :date)";
        $tblvalue = array(
            ':id' => null,
            ':name' => htmlspecialchars(ucwords($pn)),
            ':issue' => htmlspecialchars(ucfirst($cd)),
            ':sex' => htmlspecialchars($sex),
            ':age' => htmlspecialchars($a),
            ':height' => htmlspecialchars($h),
            ':weight' => htmlspecialchars($w),
            ':ward_number' => htmlspecialchars(ucfirst($wn)),
            ':date' => date("Y-m-d")
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
            echo '<script> window.location="http://localhost/kiri/addPatient/added"; </script>';
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
                New Patient has been added.
                <a href='patient' class='btn btn-success'>Back</a>
            </div>
        ";
    }
?>

<div class="row">
    <div class="col-md-12 middle no-space">
        <h1>Add Patient</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="background:#fff;padding:20px;">
        <form action="addPatient" method="POST" class="insert">
            <div class="row mp">
                <div class="col-md-6 box1 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <label for="names">Patient Name:</label>
                            <input type="text" name="pn" id="names" placeholder="Enter patient name" required>
                            <label for="sex">Sex:</label>
                            <select name="sex" id="sex" required>
                                <option value="">Sex</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                            <label for="a">Age:</label>
                            <input type="text" name="a" id="a" placeholder="Enter patient age" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box2 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <label for="w">Weight:</label>
                            <input type="text" name="w" id="w" placeholder="Enter patient weight" required>

                            <label for="h">Height:</label>
                            <input type="text" name="h" id="h" placeholder="Enter patient height" required>

                            <label for="wn">Ward Number:</label>
                            <input type="text" name="wn" id="wn" placeholder="Enter ward number" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 box mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <label for="cd">Case Description:</label>
                            <textarea name="cd" id="cd" placeholder="Enter health issue" required></textarea>
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