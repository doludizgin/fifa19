<?php include_once("helper.class.cb.php"); ?>
<?php $helperClass = new HelperClass(); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/scripts/button.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Fifa 19 randomizer</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  <link href="vendor/bootstrap/css/animate.css" rel="stylesheet">    
  <link href="assets/styles/style.css" rel="stylesheet">  
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Fifa 19 randomizer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
    <div class="col">
      <h1 class="mt-5">You have selected 3-4-1-2</h1>
      <img src="images/3-4-1-2.png" usemap="#image-map">
      <map name="image-map">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#GK1Modal" coords="251,609,35" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#CB1Modal" coords="125,500,33" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#CB2Modal" coords="250,501,33" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#CB3Modal" coords="375,502,31" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#CM1Modal" coords="180,328,33" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#CM2Modal" coords="322,331,33" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#LM1Modal" coords="90,270,34"  shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#CAM1Modal"coords="251,229,31" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#RM1Modal" coords="410,270,28" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#ST1Modal" coords="180,109,31" shape="circle">
          <area target="" alt="CB" href="#" data-toggle="modal" data-target="#ST2Modal" coords="320,110,29" shape="circle">
      </map>
    </div>
    <div class="col">
      <h1 class="mt-5 text-center">Selected players</h1>

      <table class="table" id="my_schedules">
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th class="text-center" scope="col">Nationality</th>
            <th class="text-center" scope="col">Club</th>
            <th scope="col">Position</th>
            <th scope="col">Overall</th>
          </tr>


      </table>
    </div>
  </div>
<?php
foreach($helperClass->getPositions() as $value) { ?>
<div class="modal fade" id="<?php echo $value; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Choose your player</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      
        
      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th class="text-center" scope="col">Nationality</th>
            <th class="text-center" scope="col">Club</th>
            <th scope="col">Position</th>
            <th scope="col">Overall</th>
            <th scope="col">Foot</th>
          </tr>
        </thead>
          <tbody>
          <?php
          foreach($helperClass->getShuffledPlayerPositions($value) as $shuffledKey => $shuffledValue) {
            ?>
              <tr>
                <td class="align-middle animated fadeIn slow"><button type="button" class="btn btn-success add-player-to-list">Select player</button></td>
                <td class="align-middle animated fadeIn slow"><img src="<?php echo $shuffledValue['Photo'] ; ?>"></td>
                <td class="align-middle animated fadeIn slow"><?php echo $shuffledValue['Name'] ; ?></td>
                <td class="align-middle text-center animated fadeIn slow"><img src="<?php echo $shuffledValue['Flag'] ; ?>"><br><?php echo $shuffledValue['Nationality'] ; ?></td>
                <td class="align-middle text-center animated fadeIn slow"><img src="<?php echo $shuffledValue['Club Logo'] ; ?>"><br><?php echo $shuffledValue['Club'] ; ?></td>
                <td class="align-middle text-center animated fadeIn slow"><?php echo $shuffledValue['Position'] ; ?></td>
                <td class="align-middle text-center animated fadeIn slow"><?php echo $shuffledValue['Overall'] ; ?></td>
                <td class="prefferedfoot align-middle animated fadeIn slow"><?php echo $shuffledValue['Preferred Foot'] ; ?></td>
              </tr>
            <?php
          }
          ?>



        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closemodal" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>


</body>
</html>