<?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $post = $_POST['post'];
    $experience = $_POST['experience'];
    $qualification = $_POST['qualification'];
    $describe = $_POST['describe'];
    $project = $_POST['project'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];
    $phn = $_POST['phn'];

    //Database connection
    $conn = new mysqli('localhost','root','','job applicants details');
    if($conn->connect_error)
    {
        die('Connection failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->perpare("insert into regestration(name,age,gender,post,experience,qualification,describe,project,github,linkedin,email,phone number) values(?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sississssssi",$name,$age,$gender,$post,$yr_of_exp,$qualification,$describe,$project,$github,$linkedin,$email,$phn);
        $stmt->execute();
        echo "regestration successful...";
        $stmt->close();
        $conn->close();
    }
?>