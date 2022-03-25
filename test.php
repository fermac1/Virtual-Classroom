
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <!-- <form action="" method="post">
     <table>
       <tr>
         <th>name</th>
         <th>age</th>
         <th>action</th>
       </tr>
       <tr><td><input type="text" name="input" id="input" value="hello" readonly></td>
       <td><input type="number" name="input" id="input" value="5" readonly></td>
       <td> <button type="button" name="dlete" id='dlete' data-bs-toggle='modal' data-bs-target='#delete'>dlete</button></td>
       <tr>
       <td><input type="text" name="input" id="input" value="hi" readonly></td>
         <td><input type="number" name="input" id="input" value="6" readonly></td>
         <td> <button type="button" name="dlete" id='dlete' data-bs-toggle='modal' data-bs-target='#delete'>dlete</button></td>
       </tr>
     </table>
     
   <button type='submit' name="delete-modal" class='dropdown-item'  data-bs-toggle='modal' data-bs-target='#delete'>Delete this course</button>
   <a class='dropdown-item' href='' data-bs-toggle='modal' data-bs-target='#rename'>rename</a>
   <a class='dropdown-item' href=''data-bs-toggle='modal' data-bs-target='#details'>details</a>
   <button type="button" name="dlete" id='dlete' data-bs-toggle='modal' data-bs-target='#delete'>dlete</button>



  delete Modal -->
<!-- <div class='modal fade' id='delete' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='deleteLabel' aria-hidden='true'>
<div class='modal-dialog modal-sm'>
<div class='modal-content'>
<div class='modal-header'> -->
<!-- <h5 class='modal-title' id='staticBackdropLabel'>Modal title</h5> -->
<!-- <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
</div> -->
<!-- <form action='delete_file.php' method='post'> -->
<!-- <input type="hidden" name="delete-row">
<div class='modal-body' id='modal-bdy'> -->

<!-- Are you sure you want to delete file( )? -->

<!-- </div>
<div class='modal-footer'>
<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
<button type='submit' name='deletefile' id='deletefile' class='btn btn-primary'>Delete</button>
</div>
 </form> -->
<!-- </div>
</div>
</div>
</form>  -->

<form action="test.php" method="post">
  <input type="date" name="date" id="">
  <input type="time" name="time" id="">
  <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit'])){
echo "<p>{$_POST['date']} is date</p>";
echo "<p>{$_POST['time']} is time</p>";

$input_d = $_POST['date'];
$input_t = $_POST['time'];

if($input_t < date("H:i:s")){
  echo 'true';
}else{
  echo 'false...';
}
}
?>

<?php
$expire = time() + (12 * 60 *60);
$date = date("H:i:s");
$expiry = date("H:i:s", strtotime($date. "+13 hours"));
// $expiry -> add(new DateInterval("PT12H"));
echo time();
echo '<br>';
echo (12 * 60 *60);
echo '<br>';
echo $date;
echo '<br>';
echo $expiry;
?>

<!-- Modal -->
    <!-- Modal content-->
    <!-- <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Delete Modal</h4>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to delete this ?</p>
        </div>
        <div class="modal-footer">
            <a href="" class="btn btn-danger modal_delete">Delete</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
    </div>

</div> -->

 <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
  // $('#dlete').click(function(){
  //   var fileStr = <?php echo json_decode($file_id);?>;
  //   var input = $('#input').val();
  //   var str = 'Are you sure you want to delete file('+ input + fileStr +')?';
  //   $('#modal-bdy').html(str);
  // })

  $(document).ready(function () {

$(".delete_link").on('click', function () {

    var id = $(this).attr("rel");

    var delete_url = "comments.php?delete="+ id +" ";

    $(".modal_delete").attr("href", delete_url);

    $("#myModal").modal('show');

})

})
</script>
</body>
</html>
