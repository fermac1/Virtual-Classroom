<?php
// include('connect.php');
// include('session.php');
// $id = $_SESSION['id'];
// $table=''; $table_header='';

// if(isset($_POST['reg-list'])){
//     $getCourse = $_POST['course'];

//     //check course_registration table for matching course
//     $sql = "SELECT * FROM course_registration WHERE course_code ='$getCourse'";
//     $query = mysqli_query($conn, $sql);
    
//     if(mysqli_num_rows($query) > 0){
                
//         $table_header .= "<tr>
//         <th>first name</th>
//         <th>last name</th>
//         <th>Email</th>
//         </tr>";
//         while($row = mysqli_fetch_assoc($query)){
//             $userID = $row['userID'];
//             $email = $row['user_email'];
        
//             $user = "SELECT * FROM users WHERE email ='$email' ";
//             $user_query = mysqli_query($conn, $user);
//             if(mysqli_num_rows($user_query) > 0){
//                 while($user_data = mysqli_fetch_assoc($user_query)){
//                     $student_id = $user_data['id'];
//                     $user_email = $user_data['email'];
//                     $firstname = $user_data['first_name'];
//                     $lastname = $user_data['last_name'];
//                 }

//             }else{
                
//                 echo   "<div class='alert alert-warning' role='alert'>
//                         user does not exist
//                         </div>";
              
//             }
    
//      $table .="<tr>
//             <td>{$firstname}</td>
//             <td>{$lastname}</td>
//             <td>{$user_email}</td>
//         </tr>"; 
        
//     }      
                    
// }else{
    
//     echo   "<div class='alert alert-warning' role='alert'>
//     no student has registered for this course yet
//     </div>";
//     // header("location:teacher_dashboard.php");
// }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/course_reg_list.css">

    <title>List of registered students</title>
</head>
<body>
        <table>
            <?php if(mysqli_num_rows($query) > 0){
                echo $table_header;
            }?>    
 <?php echo $table;?>
        </table>



</body>
</html>