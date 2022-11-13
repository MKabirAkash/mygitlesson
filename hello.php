<?php
    $server= "localhost";
    $username= "root";
    $password= "";
    $database="demo";
    $variable=mysqli_connect($server,$username,$password,$database);

    if(isset($_POST['login'])){

        $email=$_POST['email1'];
        $password=$_POST['pass1'];
        $age=$_POST['age'];
        $sql="INSERT INTO `student` (`email`, `password`, `age`) VALUES ('meem@gmail', 'meem', '20');";
        mysqli_query($variable,$sql);
}
?>