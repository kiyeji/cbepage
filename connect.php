<?php
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root', '', 'student');
    if($conn->connection_error){
        die('connection Failed : '.$conn->connect_error);
    }else{$stmt = $conn->prepare("insert into register(FirstName, LastName, email, password) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$FirstName, $LastName, $email, $password);
    $stmt->execute();
    echo "registration successful...";
    $stmt->close();
    $conn->close();
}
?>