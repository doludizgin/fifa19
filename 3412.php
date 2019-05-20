<?php
include_once 'includes/header.inc.php';
$players = $helperClass->getPositions();
?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
    <div class="col">
      <h1 class="mt-5">You have selected 3-4-1-2</h1>
      <img src="images/3-4-1-2.png" usemap="#image-map">
      <map name="image-map">
        <?php
        foreach($players as $player) {
          if($player['type'] === "player" && isset($player['coords'])) {
            ?><area target="" alt="<?php echo $player['position']; ?>" href="#" data-toggle="modal" data-target="#<?php echo $player['position']; ?>Modal" coords="<?php echo $player['coords']; ?>" shape="circle"><?php
          }
        }
        ?>
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
foreach($players as $player) { ?>
<div class="modal fade" id="<?php echo $player['position']; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          foreach($helperClass->getShuffledPlayerPositions($player['position']) as $shuffledKey => $shuffledValue) {
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