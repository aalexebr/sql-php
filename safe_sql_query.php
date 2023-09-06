<?php
require_once __DIR__.'./class/Department.php';

define('DB_SERVERNAME','localhost:3306');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME','db_university');

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// var_dump($conn);
$stmt = $conn->prepare('SELECT * FROM departments');
// $stmt->bind_param("i", $db);
// $db = 1;
$stmt->execute();
$result = $stmt->get_result();
// $sql = "SELECT * FROM departments";
// $result = $conn->query($sql);
$departments = [];
if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $department = new Department(
            $row['id'],
            $row['name'],
            $row['address'],
            $row['phone'],
            $row['email'],
            $row['website'],
            $row['head_of_department']
        );
        $departments[] = $department;
    }
}
elseif($result){
    echo 'no results found';
}
else{
    echo'query error';
}

$conn->close();

var_dump($departments);