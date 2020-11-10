<!doctype html>
<html lang="en">
  <head>
    <title>Votação</title>
    <!-- Required meta tags -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

  <style>

    .container-fluid{
      margin-bottom: 10px;
    }

    .container{
      background-color: rgba(144, 144,414);
    }

    .container > h1{
      text-align: center;
      margin-bottom: 40px;
    }

    .box{
      min-width:auto;
      max-width:auto;
      height: 100px;
      justify-content: center;
    }

    .boxYellow{
      background-color: yellow;
    }

    .boxYellow p:hover{
      color: rgb(255, 255, 102);
    }
     
    .boxRed{
      background-color: red;
    }

    .boxPurple{
      background-color: purple;
    }

    .boxGreen{
      background-color: green;
    }

    .boxBrown{
      background-color: brown;
    }

    .boxBlue{
      background-color: blue;
    }

    .boxBlack{
      background-color: black;
    }

    .boxPink{
      background-color: pink;
    }

    .boxGray{
      background-color: gray;
    }

    .boxWhite{
      background-color: white;
    }

    .btn{
      border: 1px solid white;
      margin: 10px;
      padding: 10px;
    }

    .formWrapper{
     
    }

    #btnPurple{
      background-color: purple;
    }

    #btnPink{
      background-color: pink;
    }

    #btnBrown{
      background-color: brown;
    }

    #btnWhite{
      border: 1px solid gray;
    }

    a{
      color: white;
      font-size: 50px;
      margin-left: 350px;
      padding: 5px;
      text-decoration: none;
    }

  </style>

  <div class="container-fluid">
    <div class="container">
      <h1>VOTE NA SUA COR FAVORITA!</h1>
  <div class="row">
        <div class="col-sm-3"><div class="box boxYellow"><p class="text-center">AMARELO</p></div></div>
        <div class="col-sm-3"><div class="box boxRed"></div></div>
        <div class="col-sm-3"><div class="box boxPurple"></div></div>
        <div class="col-sm-3"><div class="box boxBlue"></div></div>
        
        <div class="col-sm-3"><div class="box boxGreen"></div></div>
        <div class="col-sm-3"><div class="box boxGray"></div></div>
        <div class="col-sm-3"><div class="box boxBlack"></div></div>
        <div class="col-sm-3 "><div class="box boxWhite"></div></div>
  </div>

  <div class="row justify-content-center">
        <div class="col-sm-3"><div class="box boxPink"></div></div>
        <div class="col-sm-3 "><div class="box boxBrown"></div></div>
  </div>
        
  </div>
  </div>
      <div class="container formWrapper bg-success">
        <form action="" method="POST">
        <button class="col-sm-2 btn btn-warning btn-sm" type="submit" name="vYellow" id="vYellow">Vote Amarelo</button>
        <button class="col-sm-2 btn btn-danger btn-sm" type="submit" name="vRed">Vote Vermelho</button>
        <button class="col-sm-2 btn btn-primary btn-sm" type="submit" id="btnPurple" name="vPurple">Vote Roxo </button>
        <button class="col-sm-2 btn btn-primary btn-sm" type="submit" name="vBlue">Vote Azul </button>
        <button class="col-sm-2 btn btn-success btn-sm" type="submit" name="vGreen">Vote Verde </button>
        <button class="col-sm-2 btn btn-secondary btn-sm" type="submit" name="vGray">Vote Cinza </button>
        <button class="col-sm-2 btn btn-dark btn-sm" type="submit" name="vBlack">Vote Preto</button>
        <button class="col-sm-2 btn btn-light btn-sm" type="submit" id="btnWhite" name="vWhite">Vote Branco </button>
        <button class="col-sm-2 btn btn-primary btn-sm" type="submit" id="btnPink" name="vPink">Vote Rosa </button>
        <button class="col-sm-2 btn btn-dark btn-sm" type="submit" id="btnBrown" name="vBrown">Vote Marrom </button>
        </form>

        <a href="vote.php?resultados">VER RESULTADOS</a>
  </div>
  

  <div class="container bg-primary">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Amarelo</th>
            <th>Vermelho</th>
            <th>Roxo</th>
            <th>Azul</th>
            <th>Verde</th>
            <th>Cinza</th>
            <th>Preto</th>
            <th>Branco</th>
            <th>Rosa</th>
            <th>Marrom</th>
            <th>TOTAL</th>
          </tr>
        </thead>
      
    </div>
  </div>

  <?php

    $con = mysqli_connect("localhost", "root", "root", "test");

    if(mysqli_connect_errno()){
      echo "Não pode concetar db!";
      exit;
    } else{
      echo "Conectado com sucesso!";
    }

    if(isset($_POST['vYellow'])){

      $voteYellow = "UPDATE voteCor SET yellow = yellow + 1";
      $queryYellow = mysqli_query($con, $voteYellow);

      if($queryYellow){
        echo " <br> Voto AMARELO computado. <br>";
      }

    }

    if(isset($_POST['vRed'])){

      $voteRed = "UPDATE voteCor SET red = red + 1";
      $queryRed = mysqli_query($con, $voteRed);

      if($queryRed){
        echo " <br> Voto VERMELHO computado. <br>";
      }
    }

    if(isset($_POST['vPurple'])){
      $votePurple = "UPDATE voteCor SET purple = purple + 1";
      $queryPurple = mysqli_query($con, $votePurple);

      if($queryPurple){
        echo " <br> Voto ROXO computado. <br>";
      }
    }

    if(isset($_POST['vBlue'])){
      $voteBlue = "UPDATE voteCor SET blue = blue + 1";
      $queryBlue = mysqli_query($con, $voteBlue);

      if($queryBlue){
        echo " <br> Voto AZUL computado. <br>";
      }
    }

    if(isset($_POST['vGreen'])){
      $voteGreen = "UPDATE voteCor SET green = green + 1";
      $queryGreen = mysqli_query($con, $voteGreen);

      if($queryGreen){
        echo " <br> Voto VERDE computado. <br>";
      }
    }

    if(isset($_POST['vGray'])){
      $voteGray = "UPDATE voteCor SET gray = gray + 1";
      $queryGray = mysqli_query($con, $voteGray);

      if($queryGray){
        echo " <br> Voto CINZA computado. <br>";
      }
    }

    if(isset($_POST['vBlack'])){
      $voteBlack = "UPDATE voteCor SET black = black + 1";
      $queryBlack = mysqli_query($con, $voteBlack);

      if($queryBlack){
        echo " <br> Voto PRETO computado. <br>";
      }
    }

    if(isset($_POST['vWhite'])){
      $voteWhite = "UPDATE voteCor SET white = white + 1";
      $queryWhite = mysqli_query($con, $voteWhite);

      if($queryWhite){
        echo " <br> Voto BRANCO computado. <br>";
      }
    }

    if(isset($_POST['vPink'])){
      $votePink = "UPDATE voteCor SET pink = pink + 1 ";
      $queryPink = mysqli_query($con, $votePink);

      if($queryPink){
        echo " <br> Voto ROSA computado. <br>";
      }
    }

    if(isset($_POST['vBrown'])){
      $voteBrown = "UPDATE voteCor SET brown = brown + 1";
      $queryBrown = mysqli_query($con, $voteBrown);

      if($queryBrown){
        echo " <br> Voto MARROM computado. <br>";
      }
    }

    if(isset($_GET['resultados'])){
      $selectAll = "SELECT * FROM voteCor";
      $querySelectAll = mysqli_query($con, $selectAll);

      $selectS = mysqli_fetch_array($querySelectAll);

      $soma = $selectS[0] + $selectS[1] + $selectS[2] + $selectS[3] + $selectS[4] + $selectS[5] + $selectS[6] + $selectS[7] + $selectS[8] + $selectS[9];

      $porcentoAmarelo = round(($selectS[0] / $soma) * 100);
      $porcentoVermelho = round(($selectS[1] / $soma) * 100);
      $porcentoRoxo = round(($selectS[2] / $soma) * 100);
      $porcentoAzul = round(($selectS[3] / $soma) * 100);
      $porcentoVerde = round(($selectS[4] / $soma) * 100);
      $porcentoCinza = round(($selectS[5] / $soma) * 100);
      $porcentoPreto = round(($selectS[6] / $soma) * 100);
      $porcentoBranco = round(($selectS[7] / $soma) * 100);
      $porcentoRosa = round(($selectS[8] / $soma) * 100);
      $porcentoMarrom = round(($selectS[9] / $soma) * 100);
      $porcentoTotal = round(($soma / $soma) * 100);

      echo "
      <tbody>
        <tr>
          <td>$selectS[0]</td>
          <td>$selectS[1]</td>
          <td>$selectS[2]</td>
          <td>$selectS[3]</td>
          <td>$selectS[4]</td>
          <td>$selectS[5]</td>
          <td>$selectS[6]</td>
          <td>$selectS[7]</td>
          <td>$selectS[8]</td>
          <td>$selectS[9]</td>
          <td>$soma<td>
        </tr>
        <tr>
          <td>$porcentoAmarelo%</td>
          <td>$porcentoVermelho%</td>
          <td>$porcentoRoxo%</td>
          <td>$porcentoAzul%</td>
          <td>$porcentoVerde%</td>
          <td>$porcentoCinza%</td>
          <td>$porcentoPreto%</td>
          <td>$porcentoBranco%</td>
          <td>$porcentoRosa%</td>
          <td>$porcentoMarrom%</td>
          <td>$porcentoTotal%<td>
        </tr>
      </tbody>
      ";
    }
    echo "</table>";
    
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>