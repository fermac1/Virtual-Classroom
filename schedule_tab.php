<div class="row schedule-data">
         
          <?php
            // Get data from the database
          $query = $conn->query("SELECT * FROM schedule_class WHERE teacher_id = $id ORDER BY course_code DESC");

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
                  $course_code = $row["course_code"];
                  $class_id = $row['id'];
                  $time = $row['time'];
                  $date = $row['date'];

include('schedule_info.php'); 


              } 

      $current_date = date("Y-m-d") ;
      $current_time = date("H:i:s") ;

          
          $delete = "DELETE FROM schedule_class WHERE date < '$current_date'";
          $d_query = mysqli_query($conn, $delete);
            

              }else{ 
               echo "<div class='alert alert-warning no-schedule' role='alert'>
                no class has been scheduled yet
              </div>";
               
             }
          ?>


</div>