<?php

require "DML_Users.php";
$pdo=connectToDb();
$gender;
if(isset($_POST['gender'])){
    $gender=$_POST['gender'];
}
else{
    $gender='';
}
$city;
if(isset($_POST['city'])){
    $city=$_POST['city'];
}
else{
    $city='';
}
$data=[
    'firstname' => $_POST["fname"],
    'lastname' => $_POST["lname"],
    'email'=>$_POST["email"],
    'gender' => $gender,
    'city' => $city];
insert($pdo,'user',$data);

$i=selectAll($pdo,'user','User');


?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" media="all">
    <title>User</title>
    </head>
    <div>
        <h1 align="center">User Details</h1>
        <table class="table">
            
            <thead class="table-dark">
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>City</th>
            </thead>
            <tbody>
                <?php 
                    foreach($i as $data) :
                ?>
                <tr>
                    <td><?= $data->id; ?></td>
                    <td><?= $data->firstname; ?></td>
                    <td><?= $data->lastname; ?></td>
                    <td><?= $data->email; ?></td>
                    <td><?= $data->gender; ?></td>
                    <td><?= $data->city; ?></td>
                </tr> 
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</html>