<?php

class Mike_ProductAttribute_Model_Product extends Mage_Catalog_Model_Product {
  
  public function getCustomAttribute($attr = null){

    var_dump('www');
    if(is_null($attr)){
      return "Custom attribute";
    } else {
      if(!empty($this->getData($attr))){
        return $this->getData($attr);
      } else {
        return false;
      }
    }
  }
}
