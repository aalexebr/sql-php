<?php
require_once __DIR__.'/../class/Degree.php';
require_once __DIR__.'/../class/Department.php';

define('DB_SERVERNAME','localhost:3306');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME','db_university');

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

$stmt = $conn->prepare('SELECT * FROM degrees');

$stmt->execute();
$result = $stmt->get_result();

$degrees = [];
if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $degree = new Degree(
            $row['id'],
            $row['department_id'],
            $row['name'],
            $row['level'],
            $row['address'],
            $row['email'],
            $row['website']
        );
        $degrees[] = $degree;
    }
}
elseif($result){
    echo 'no results found';
}
else{
    echo'query error';
}

$conn->close();

var_dump($degrees);
file_put_contents('../dbJSON/degrees.json',json_encode($degrees));