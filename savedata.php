
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/bootstrap.min.css">

<style>
    .title
    {
        color: red;
    }

    .btn
    {
        font-size:1cm;  
    }

</style>


</head>
<body>
    
    

<?php
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];

$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");




if($result == 1)
{

    Echo "<script> alert('Your Data Saved Successfull');</script>";
   Echo "<center><h1 class='title' style='margin:1cm;'>Thank you for taking the time and priorty to  donate blood!</h1>";
    Echo "<a href='http://localhost/PHP_Programs/blood_bank/home.php' class='btn btn-outline-success'>Return to Dashboard</a></center>";

    mysqli_close($conn);
}
 ?>


</body>
</html>
