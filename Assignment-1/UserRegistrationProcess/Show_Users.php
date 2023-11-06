<?php

require "DML_Users.php";
$pdo=connectToDb();

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