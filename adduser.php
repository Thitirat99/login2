<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $patientId=$_POST['patientId'];
  $name=$_POST['name'];
  $sex=$_POST['sex'];
  $age=$_POST['age'];
  $phoneNumber=$_POST['phoneNumber'];
  $email=$_POST['email'];
  $diseaseName=$_POST['diseaseName'];

  $sql="INSERT INTO `patient` (patientId, name, sex, age, phoneNumber, email, diseaseName)
  VALUES ('$patientId', '$name', '$sex', '$age', '$phoneNumber', '$email', '$diseaseName')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "connect DB!";
  }else{
    echo "Failed to connect DB: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Alignment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-container {
      text-align: left;
      padding-left: 0;
    }
    .button-container{
      text-align: center;
    }
    .h1-container{
      text-align: center;
    }
  </style>
</head>
<body>
  <br>
  <div class="h1-container">
    <div class="container my-5"></div>
  <h1 style="color:#DC143C">Adduser</h1>
  </div>
  <div class="container mt-5 form-container">
    <form method="post">
    <div class="mb-3">
      <label for="patientId">Patient Id</label>
      <input type="text" class="form-control" 
      placeholder="Enter your Id" name="patientId" id="patientId">
    </div>
    <div class="mb-3">
      <label for="name">Name</label>
      <input type="text" class="form-control" 
      placeholder="Enter your name" name="name" id="name">
    </div>
    <div class="mb-3">
      <label for="sex">Sex</label>
      <select class="form-control" id="sex" name="sex">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <select class="form-control" id="age" name="age">
      </select>
    </div>
    <div class="mb-3">
      <label for="phoneNumber">Phone Number</label>
      <input class="form-control" 
      placeholder="Enter your number" name="phoneNumber" id="phoneNumber">
    </div>
    <div class="mb-3">
      <label for="email">Email</label>
      <input type="text" class="form-control" 
      placeholder="Enter your email" name="email" id="email">
    </div>
    <div class="mb-3">
      <label for="diseaseName">Disease Name</label>
      <select class="form-control" id="diseaseName" name="diseaseName">
      </select> 
    </div>

    <div class="button-container">
    <button type="submit" class="btn btn-primary" name="submit">Save</button>
    <button type="reset" class="btn btn-danger">Cancel</button>
  </div>
  </form>
  <script>
    // Function to populate the age select options
    function populateAgeOptions() {
      const ageSelect = document.getElementById('age');
      for (let i = 0; i <= 120; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        ageSelect.appendChild(option);
      }
    }
    // Function to populate the disease name select options
    function populateDiseaseOptions() {
      const diseases = [
        "Diabetes",
        "Hypertension",
        "Asthma",
        "Cancer",
        "COVID-19",
        "Heart Disease",
        "Stroke",
        "Alzheimer's",
        "Arthritis"
      ];
      
      const diseaseSelect = document.getElementById('diseaseName');
      diseases.forEach(disease => {
        const option = document.createElement('option');
        option.value = disease.toLowerCase().replace(/ /g, '-');
        option.textContent = disease;
        diseaseSelect.appendChild(option);
      });
    }

    // Call the function to populate the age and disease options on page load
    document.addEventListener('DOMContentLoaded', () => {
      populateAgeOptions();
      populateDiseaseOptions();
    });
    function selectSex() {
      const sex = document.getElementById('sex').value;
      alert('Selected sex: ' + sex);
    }
  </script>
</body>
</html>
