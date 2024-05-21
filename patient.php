<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตาราง patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="adduser.php" class="text-light">Add user</a></button>
        <div class="container my-5">

        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">PatientId</th>
      <th scope="col">Name</th>
      <th scope="col">Sex</th>
      <th scope="col">Age</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Email</th>
      <th scope="col">diseaseName</th>
      <th scope="col" >Details</th>
      <th scope="col" >Operations</th>

    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from `patient`";
  $result=mysqli_query($conn,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $patientId=$row['patientId'];
        $name=$row['name'];
        $sex=$row['sex'];
        $age=$row['age'];
        $phoneNumber=$row['phoneNumber'];
        $email=$row['email'];
        $diseaseName=$row['diseaseName'];
        echo '<tr>
        <th scope="row">'.$patientId.'</th>
        <td>'.$name.'</td>
        <td>'.$sex.'</td>
        <td>'.$age.'</td>
        <td>'.$phoneNumber.'</td>
        <td>'.$email.'</td>
        <td>'.$diseaseName.'</td>
      </tr>';
    }
  }



  ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>@twitter</td>
      <td>@fat</td>

    </tr> -->
  </tbody>
</table>




    
    </div>
    
</body>
</html>