<?php
     //ricerca.
     header("Content-Type:application/json");
     $fileName = "vocabolario.json";
     $input = $_GET["input"];
     $p = lcfirst($_GET["p"]);
     // fopen("vocabolario.json");
     //$vocabolario = file_get_contents($fileName);
     //$vocabolario = json_decode($vocabolario, true);
     // $esiste = $vocabolario[$input];
     // if(!!$esiste){
     //      $risposta["risultato"] = $esiste;
     //      echo json_encode($risposta);
     // }
     // else{
     //      $risposta["risultato"] = "no";
     //      echo json_encode($risposta);
     // }
     //inserimento.
     $json = file_get_contents($fileName);
     echo $json;
     $arrayJson = json_decode($json, true);
     echo $arrayJson;
     $termine = $_GET["termine"];
     $significato = $_GET["significato"];
     $arrayJson[$termine] = $significato;
     $json_data = json_encode($arrayJson);
     file_put_contents("vocabolario.json", $json_data);
     // $fp = fopen("vocabolario.json","w");
     // fwrite($fp, json_encode($risposta));
     // echo $vocabolario;
?>