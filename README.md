# riotapi em php
Este codigo em php exemplifica da forma mais simples possivel como consumir a riot api
Primeiramente utilizamos a função file_get_contents() para pegarmos o json que a api fornece
logo após utilizamos a funçao json_decode(tendo como parametro o json que retornou da função anterior)  para que o json se torne um PHP object.
```php
          echo  "<img src='http://ddragon.leagueoflegends.com/cdn/6.3.1/img/profileicon/".$data->profileIconId.".png'>";

```
