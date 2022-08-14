<?php
include('connect.php');
include('teacher_dashboard.php');
$id = $_SESSION['id'];
$table=''; $table_header='';
?>
<div class="sub-section not-dashboard">
<h3>List of Students</h3>
<?php 
if(isset($_POST['reg-list'])){
    $getCourse = $_POST['course'];
    $counter = 0;
// echo $getCourse;
    //check course_registration table for matching course
    $sql = "SELECT * FROM course_registration WHERE course_code ='$getCourse'";
    $query = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($query) > 0){
                
        $table_header .= "<tr>
        <th> S/N </th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        </tr>";
        
        while($row = mysqli_fetch_assoc($query)){
            $userID = $row['userID'];
            $email = $row['user_email'];
            $counter += 1;

            $user = "SELECT * FROM users WHERE email ='$email' ";
            $user_query = mysqli_query($conn, $user);
            if(mysqli_num_rows($user_query) > 0){
                while($user_data = mysqli_fetch_assoc($user_query)){
                    $student_id = $user_data['id'];
                    $user_email = $user_data['email'];
                    $firstname = ucfirst($user_data['first_name']);
                    $lastname = ucfirst($user_data['last_name']);
                    $gender = $user_data['gender'];
                }

            }
            // else{
                
            //     echo   "<div class='alert alert-warning' role='alert'>
            //             user does not exist
            //             </div>";
              
            // }
    
     $table .="<tr>
            <td>{$counter}</td>
            <td>{$firstname}</td>
            <td>{$lastname}</td>
            <td>{$user_email}</td>
            <td>{$gender}</td>
        </tr>"; 
        // header("location:course_reg_list.php");
        
    }      
                    
}else{
    echo   "<div class='alert alert-warning' role='alert'>
    no student has registered for this course yet
    </div>";
    // header("location:teacher_dashboard.php");
}
}

?>
   <table>
        <?php if(mysqli_num_rows($query) > 0){
            echo $table_header;
        }?>    
        <?php echo $table;?>
    </table>
</div>