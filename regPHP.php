<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $gen=$_POST['Gen'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $clothing=array();
    $clothing[0]=$_POST["Western"];
    $clothing[1]=$_POST["Tradition"];
    $clothing[2]=$_POST["90s Fashion"];
    $clothing[3]=$_POST["80s Fashion"];
    $clothing[4]=$_POST["wedding"];
    $clothing[5]=$_POST["Mordern Fashion"];
    $clothing[6]=$_POST["Casual"];
    
    $conn=mysqli_connect("localhost","root","","practise");
    if($conn)
    {
        echo"<br>connected successfully";
    }
    else
    {
        echo"<br>Error!";
    }

    $q1="INSERT INTO register(fname,lname,gen,email,contact) values('$fname','$lname','$gen','$email','$contact')";
    $result=mysqli_query($conn,$q1);
    $q1="INSERT INTO clothing() values('$fname','$lname','$gen','$email','$contact')";
    if($result)
    {
        echo"<br>Data Inserted Successfully";
    }
    else
    {
        echo"<br>ERROR!";
    }