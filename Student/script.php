<?php 
    include('./dbconnect.php');

    //login script
    if(isset($_POST['login'])){
        $un=mysqli_real_escape_string($conn,$_POST['username']);
        $pw=mysqli_real_escape_string($conn,$_POST['password']);

        $sql="SELECT * FROM user WHERE username='$un' AND password='$pw'";
        $res=mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)>0){
            header('location:home.php');
        }
        else{
            echo "Failed to Login";
        }
    }


    //create script
    if(isset($_POST['create'])){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $regno=mysqli_real_escape_string($conn,$_POST['regno']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);

        $sql="INSERT INTO student(name,regno,city) VALUES('$name','$regno','$city')";
        $res=mysqli_query($conn,$sql);

        if($res){
            header('location:home.php');
        }else{
            echo "Student Add failed!";
        }
    }

    //update script
    if(isset($_POST['update'])){
        $id=mysqli_real_escape_string($conn,$_POST['id']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $regno=mysqli_real_escape_string($conn,$_POST['regno']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);

        $sql="UPDATE student SET name='$name', regno='$regno', city='$city' WHERE ID='$id'";
        $res=mysqli_query($conn,$sql);

        if($res){
            header('location:home.php');
        }else{
            echo "Update Failed";
        }
    }




?>