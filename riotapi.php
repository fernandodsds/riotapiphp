<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
  if (!empty($_POST)){
    try {
        $api_key = "AQUI VEM SUA API";
        $data = json_decode(file_get_contents("https://br1.api.riotgames.com/lol/summoner/v3/summoners/by-name/".$_POST['sumonnerName']."?api_key=".$api_key));
        echo "nome: $data->name<br>";
        echo "Level: $data->summonerLevel<br>";
        echo  "<img src='http://ddragon.leagueoflegends.com/cdn/6.3.1/img/profileicon/".$data->profileIconId.".png'>";

    } catch (Exception $e) {

    }
  }else{?>
      <form class="" action="riotapi.php" method="post">
        <label for="">Nome de Jogador</label>
        <input type="text" name="sumonnerName" value="">
        <input type="submit" name="" value="testar">
      </form>

    <?php } ?>
  </body>
</html>
