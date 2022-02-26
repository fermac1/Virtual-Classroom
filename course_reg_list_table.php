<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/course_reg_list.css">

    <title>List of registered students</title>
</head>
<body>
<table>
            <tr>
            <th>first name</th>
            <th>last name</th>
            <th>Email</th>
            </tr>
            <tr>
            <td><?php echo $firstname;?></td>
            <td><?php echo $lastname;?></td>
            <td><?php echo $user_email;?></td>
            </tr>
            </table>
</body>
</html>