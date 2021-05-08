<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  header("location: login.php");
  exit;
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

    <title>Welcome <?php echo $_SESSION['username']?></title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
   
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"> Welcome <?php echo $_SESSION['username'];?></h4>
            <p>Hey! How are you doing . Welcome to the isecure .This example text is going to run a bit
                longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to logout <a href="/loginsystem/logout.php">Use this link</a></p>
        </div>
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
    <h3 class="text-center">I have fluency in all these programming languages which can help me and your institution to achieve respective goal</h3>
    <div class="header text-center my-4">
    
    <div class="container">
  <div class="row">
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CORE AND ADVANCE PYTHON</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PHP</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MYSQLI</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">NODE JS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col">
      <div class="card my-4" style="width: 18rem;">
  <img src="img/5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">REACT JS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">EXPRESS JS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
  </div>
</div>
   
<div class="header text-center my-4">
    
    <div class="container">
  <div class="row">
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MONGO DB</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HTML</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CSS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/10.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">JAVASCRIPT</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col">
      <div class="card my-4" style="width: 18rem;">
  <img src="img/11.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">DATA STRUCTURE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
    <div class="col">
    <div class="card my-4" style="width: 18rem;">
  <img src="img/12.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">C#</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
    </div>
  </div>
</div>
</body>

</html>

