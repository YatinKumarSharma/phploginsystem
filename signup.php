<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  
  include 'partials/_dbconnect.php';
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists = false;
  $existSql = "SELECT * FROM `users`.`users` WHERE username = '$username'";
  $result = mysqli_query($conn,$existSql);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows>0){
    // $exists = true;
    $showError = " Username already exists";
  }
  else {
    // $exists = false;
  

  if (($password==$cpassword)) {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users`.`users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if($result){
      $showAlert = true; 
    }
  }
  else {
    $showError = "Passwords Do Not Match ";
  }
}
}


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <?php
if($showAlert){
   echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Sucess!</strong> Your Account Is Now Created
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
if($showError){
  echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Failure!</strong> '.$showError.'
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
?>


    <div class="container">
        <h1 class="text-center">SignUp To Our Website</h1>
        <form action="/loginsystem/signup.php" method="POST">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 col-md-6">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="emailHelp" class="form-text">Make Sure To Type The Same Password.</small>
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>