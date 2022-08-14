<?php
include('connect.php');
include('teacher_dashboard.php');
$id = $_SESSION['id'];
$table=''; $table_header='';
?>
<div class="sub-section not-dashboard">

<?php
  if(isset($_POST['open_attendance'])){
      $course = $_POST['course-row'];
      $counter = 0;
?>
      <h3>Attendance for <?php echo $course;?> Class</h3>
<?php
    //check class table
    $class = mysqli_query($conn, "SELECT * FROM attendance WHERE course_code = '$course' ");
    if(mysqli_num_rows($class) > 0){
               
        $table_header .= "<tr>
        <th> S/N </th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Date</th>
        </tr>";

        while($row = mysqli_fetch_assoc($class)){
            $class_course = $row['course_code'];
            $student_id = $row['student_id'];
            $date = $row['date'];
            $counter += 1;
            //get student information
            $student = mysqli_query($conn, "SELECT * FROM users WHERE id = '$student_id'");
            if(mysqli_num_rows($student) > 0){
                while($data = mysqli_fetch_assoc($student)){
                    $firstname = $data["first_name"];
                    $lastname = $data["last_name"];    
                    $gender = $data['gender'];
                }
                
            }else{
                echo "user not found";
            }
            $table .="<tr>
            <td>{$counter}</td>
            <td>{$firstname}</td>
            <td>{$lastname}</td>
            <td>{$gender}</td>
            <td>{$date}</td>
        </tr>"; 
        }

        //delete attendance after a day
        $current_date = date("Y-m-d") ;
        $current_time = date("H:i:s") ;
  
        
        $delete = "DELETE FROM attendance WHERE course_code= '$class_course' AND $date < '$current_date'";
        $d_query = mysqli_query($conn, $delete);
    }
}
?>
   <table>
        <?php if(mysqli_num_rows($class) > 0){
            echo $table_header;
        }?>    
        <?php echo $table;?>
    </table>
</div>