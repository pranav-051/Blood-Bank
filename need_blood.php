<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="Style/bootstrap.min.css">

  <style>



table, td, th 
  {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
  font-size:4mm;
}

th, td {
  padding: 15px;
}




  </style>
</head>

<body>
  <?php 
  $active ='need';
  include('head.php') 
  ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">

  <div class="row">
      <div class="col-lg-6">
          <h1 class="mt-4 mb-3">Need Blood</h1>

        </div>
  </div>
  <form name="needblood" action="" method="post">
  <div class="row">
  <div class="col-lg-4 mb-4">
  <div class="font-italic">Blood Group<span style="color:red">*</span></div>
  <div><select name="blood" class="form-control" required>
    <option value=""selected disabled>Select</option>
    <?php
      include 'conn.php';
      $sql= "select * from blood";
      $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    while($row=mysqli_fetch_assoc($result))
    {
     ?>
     <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
    <?php 
  } 
  ?>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Reason, why do you need blood?<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="search" class="btn btn-primary" value="Search" style="cursor:pointer"></div>
</div>

</div>

<div class="row">


<table style="width:100%" >
<tr>
  <th>Donor Name</th>
  <th>Blood Group</th>
  <th>Mobile No.</th>
  <th>Gender</th>
  <th>Age</th>
  <th>Address</th>
</tr>





<?php if(isset($_POST['search'])){

  $bg=$_POST['blood'];
  $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 5";
  $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    if(mysqli_num_rows($result)>0)   {
    while($row = mysqli_fetch_assoc($result)) {
      ?>
            <tr>
              <td><?php echo $row['donor_name']; ?></td>
              <td><?php echo $row['blood_group']; ?></td>
              <td> <?php echo $row['donor_number']; ?></td>
              <td><?php echo $row['donor_gender']; ?></td>
              <td> <?php echo $row['donor_age']; ?></td>
              <td><?php echo $row['donor_address']; ?></td>
            </tr>
     

  <?php
    }
  }
    else
    {

        echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';

    }
}
 ?>

</table>
</div>
</div>
</div>
</div>
</body>
</html>
