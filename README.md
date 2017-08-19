# riotapi em php
Este codigo em php exemplifica da forma mais simples possivel como consumir a riot api
Primeiramente utilizamos a função file_get_contents() para pegarmos o json que a api fornece
logo após utilizamos a funçao json_decode(tendo como parametro o json que retornou da função anterior)  para que o json se torne um PHP object.
```php
        $data = json_decode(file_get_contents("https://br1.api.riotgames.com/lol/summoner/v3/summoners/by-name/".$_POST['sumonnerName']."?api_key=".$api_key));

```
