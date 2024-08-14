<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty ($username)){
    if (!empty($password)){
$host = "localhost";
$dbusername = "dongmo anago ange";
$dbpassword = "daacbb1@.";
$dbname = "youtube";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_errno().')'
    .mysqli_connect_error());
}
else{
    $sql = "INSERT INTO new (username, password)
    values ('$username' , $password')";
    if ($conn->query($sql)){
        echo "New record is inserted succesfully";
    }
    else{
        echo"error: ".$sql."<br>" $conn->error;
        $conn->close();
    }
}
    }
    else{
        echo "password should not be empty";
        die();
    }
}
else{
    echo"username should not be empty";
    die();
}

?>