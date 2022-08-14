<?php
  include('student_dashboard.php');
?>

<div class="container add-course sub-section not-dashboard">
    <h4 class="mb-4">Available Courses</h4>
    <?php include('student_add_course.php'); $msg = ''; ?>
<?php
$table=''; $table_header='';
    $sql = mysqli_query($conn, "SELECT * FROM courses");
    if(mysqli_num_rows($sql) > 0){

        $table_header .="  <tr>
                            <th>course code</th>
                            <th>course title</th>
                            <th>credit load</th>
                            <th></th>
                        </tr>";

        while($row_data = mysqli_fetch_assoc($sql)){
            $course_code = $row_data['course_code'];
            $course_title = $row_data['course_title'];
            $credit_load = $row_data['credit_load'];

            $table .="<tr>
                        <td>{$course_code}</td>
                        <td>{$course_title}</td>
                        <td>{$credit_load}</td>  
                        <td><a href='add_course_form.php?id={$row_data['id']}' class='btn btn-primary btnBox'>Add</a></td>   
                    </tr>";
        }
    }else{
        echo   "<div class='alert alert-warning' role='alert'>
    no available course yet
    </div>";
    }
?>

    <table>
        <?php if(mysqli_num_rows($sql) > 0){
            echo $table_header;
        }?>    
        <?php echo $table;?>
    </table>

        
</div>