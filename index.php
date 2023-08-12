<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>KNB</title>
    <style> 
        .container{
            background-color: white;
            overflow: hidden;
        }
        .col {
          border: 2px solid black;
          width: 300px;
          height: 30px;
          overflow: hidden;
          margin-left: 0px;
          padding-left: 0px;
        }
        .div {
          text-align: center;
          margin-left: auto;
          margin-right: auto;
          width: 6em;
          position: relative;
        }
        .asd {
          text-align: center;
          margin-left: auto;
          margin-right: auto;
          font: 1.6em "Fira Sans", sans-serif;
        }
    </style>
</head>
<body>


<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Турнир по игре "Камень Ножницы Бумага"</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Ребятааааааааа, вы все огромные молодцы:)! Вы справились с испытанием и были допущены до этого Турнира <br> Желаю вам всем удачи:)!</p>
    </div>
</div>




<div class="asd">
<p style="color: red">Результаты Турнира</p>
</div>

<?php include 'game.php'; ?>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      #
    </div>

    <?php for ($i=0; $i<count($player); $i++): ?>
      <div class="col">
        <?php echo $player[$i]; ?>
      </div>
      <?php endfor; ?>
      <div class="col">
        <?php echo 'Result' ?>
      </div>
    </div>  
    </div>



    <?php  
    for ($i=0; $i<count($player); $i++): ?>

      <div class="container text-center">
      <div class="row align-items-start">
      <div class="col" style="background-color: gold" > <?php  echo $player[$i]; $res = 0; ?> </div>
      <?php for($j=0; $j<count($player);$j++): ?>
      
        
        
      <div class="col"> <?php echo $player_result[$i][$j]; if ($player_result[$i][$j] != 'X') {$res_s =$player_result[$i][$j]; $res += $res_s;} ?> </div>
      <?php endfor; ?>
      <div class="col">
        <?php echo $res;?>
      </div>
      </div>
      </div>
      <?php endfor; ?>


</body>
</html>