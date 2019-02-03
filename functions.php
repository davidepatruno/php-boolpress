<?php

function parsedata($value){
  $datapost = $value['published_at'];
  $parseddata = date_parse_from_format("j/n/Y H:i:s", $datapost);
  return $parseddata;
};

function mesedata($value){
  $mesi = ['01'=>'Gennaio', '02'=>'Febbraio', '03'=>'Marzo', '04'=>'Aprile', '05'=>'Maggio', '06'=>'Giugno', '07'=>'Luglio', '08'=>'Agosto', '09'=>'Settembre', '10'=>'Ottobre', '11'=>'Novembre', '12'=>'Dicembre'];
  foreach($mesi as $numero => $mese){
    if ($value == $numero){
      $testomese = $mese;
    };
  };

  return $testomese;
};

function postEcho150($variabile, $num_caratteri)
{
  if(strlen($variabile)<=$num_caratteri)
  {
    return $variabile;
  }
  else
  {
    $stringa150 =substr($variabile,0,$num_caratteri) . '...';
    return $stringa150;
  }
};

?>
