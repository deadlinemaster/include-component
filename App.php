<?php

class App{
  
  var $title = "";
  
  public function setTitle($title){
    $this->title = $title;
  }
  
  public function getTitle(){
    return $this->title;
  }
  
  public function showTitle(){
    echo $this->title;
  }
  
  public function includeComponent($componentName, $arParams){
    
    $templateFile =__DIR__."/templates/".$componentName.".php";
    $templateResultModifierFile =__DIR__."/templates/".$componentName."-result-modifier.php";
    
    
    include $templateFile;
  }
  
  
}