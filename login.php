<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
       $host='localhost';
        $user='root';
        $password='';
        $con = mysqli_connect($host, $user, $password);
        if(!$con){
            echo 'Not Connected to the server';
        }
        $dbname ="web_project";
        mysqli_select_db($con, $dbname);
        if(!mysqli_select_db($con, $dbname)){
            echo 'Database is not selected';
        }
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $sql = "insert into login(user_name, user_email) values('$name', '$email')";
        if(!mysqli_query($con, $sql)){
            echo 'Not inserted/not saved';
        }
        else{
            echo 'Inserted/Saved succesfully';
        }
        header("refresh:2,url=login.html");
?>
    </body>
</html>