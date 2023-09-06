<?php

define('DB_SERVERNAME','localhost:3306');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME','db_university');

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// var_dump($conn);

$sql = "SELECT * FROM departments";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row['id'];
        echo '<br>';
        echo $row['name'];
        echo '<br>';
        echo $row['address'];
        echo '<br>';
        echo $row['phone'];
        echo '<br>';
        echo $row['email'];
        echo '<br>';
        echo $row['website'];
        echo '<br>';
        echo $row['head_of_department'];
        echo '<br>';
        echo '<br>';
        echo '<br>';
    }
}
elseif($result){
    echo 'no results found';
}
else{
    echo'query error';
}

$conn->close();