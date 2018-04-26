<?php
// Zum Berechnen verschiedener Farben, eingentlich unnötigt aber ggf. später mal ergänzen!

class color_checker {
  private $r=0;
  private $g=0;
  private $b=0;
  
  
  function __destruct() {
    
  }
  
  function error($meldung) {
    trigger_error($meldung, E_USER_ERROR);
    die();
  }
  
  function getColor() {
    return "#FFFFFF";
  }
  
  function color_checker($hex_color_string) {
    // Hoffentlich immer im Format "#000000"
    if (strlen($hex_color_string)==7) {
      $hex_color_string=str_replace("#","",$hex_color_string);
    }
    if (strlen($hex_color_string)==4) {
      $hex_color_string=str_replace("#","",$hex_color_string);
    }
    
    if (strlen($hex_color_string)==3) {
      
      return;
    }
    
    if (strlen($hex_color_string)==6) {
      
      return;
    }
    
    $this->error("Farbe konnte nicht erkannt werden!");
  }
}
?>
