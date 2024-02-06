<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="info";


        $conn=new mysqli($servername,$username,$password,$database);

    if($conn->connect_error){
        die("connection failed". $conn->connect_error);
    }

    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $sql="INSERT INTO CONTACT_INFO (name,email,message)
      VALUES ('$name','$email','$message')";

      if($conn->query($sql)===TRUE)
      {
        echo "Inserted in Database";
      }
      else
      echo "Not inserted in database" . $conn->error;

      $conn->close();

?>