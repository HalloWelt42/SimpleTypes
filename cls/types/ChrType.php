<?php


namespace cls\types;


use RuntimeException;

/**
 * Class ChrType
 * @package cls\types
 */
class ChrType extends StringType
{

  /**
   * @param string $value
   * @return StringType
   */
  public function set(string $value): StringType
  {
    if( mb_strlen($value) > 1 ){
      throw new RuntimeException();//todo : msg ergänzen
    }
    $this -> str = $value;
    return $this;
  }


}