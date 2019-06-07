<!DOCTYPE html>
 <html lang="sv">
  <head>
   <title>FiveM Status - Emil Developing</title>
   
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>

  <div class="content">
   <h1 class="title">FiveM Status Page</h1>
   <br>

    <?php
    $webserver = 'https://fivem.net/';
    $server_list = 'https://servers.fivem.net/';
    $server_api = 'https://servers-live.fivem.net/api/servers/proto';
    $runtime = 'https://runtime.fivem.net/';
    $metrics = 'https://metrics.fivem.net/';
    $forums = 'https://forum.fivem.net/';
    $wiki = 'https://docs.fivem.net//';
    $keymaster = 'https://keymaster.fivem.net/';
    $lambda = 'https://lambda.fivem.net/';

    $online = '<span class="online">Online</span>';
    $offline = '<span class="offline">Offline</span>';

    echo '<div class="servers">';

    echo '<div>Webserver: ';
    $url = $webserver;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    echo '<div>Server List: ';
    $url = $server_list;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    echo '<div>Forums: ';
    $url = $forums;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    echo '<div>Keymaster: ';
    $url = $keymaster;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    echo '<div>Lambda: ';
    $url = $lambda;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    echo '<div>Wiki: ';
    $url = $wiki;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    echo '<div>Metrics: ';
    $url = $metrics;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    echo '<div>Runtime: ';
    $url = $runtime;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    echo '<div>Server API: ';
    $url = $server_api;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpcode>=200 && $httpcode<300){
      echo $online;
    } else {
      echo $offline;
    }
    echo '</div>';

    ?>

  <footer class="footer">
  FiveM Status Page by <a href="https://emildeveloping.com">Emil Developing</a>
  <br>
  This page is not affiliated to FiveM or CitizenFX Collective.
  <br>
  <br>
  <a href="#" class="source-code">Source Code</a>
  </footer>
  </div>

  </body>
</html>
