<?php 
require "User.php";
function connectToDb(){
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=tasks_app','root','Mishra@842005'); //dsn- data source name

    return $pdo;
}

function selectAll(PDO $pdo,string $table, string $class){
    $statement= $pdo -> prepare('select * from ' . $table);

$statement -> execute();
$data = $statement->fetchAll(PDO::FETCH_CLASS,$class);
    return $data;
}

function insert($pdo,$table,$data){
    $sql="INSERT INTO $table SET ";
    foreach($data as $field=>$value){
        $fieldSQL[]="$field='$value'";

    }
    $sql .= implode(',',$fieldSQL);
    $statement = $pdo->prepare($sql);
    $statement->execute();
}