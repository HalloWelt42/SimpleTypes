<?php


namespace cls\types\format_converter;


use cls\types\ChrType;

trait TStringToConverter
{

  /**
   * @return ChrType
   */
  public function String2Chr(){
    return new ChrType(
        mb_substr($this -> str,0,1)
    );
  }

}