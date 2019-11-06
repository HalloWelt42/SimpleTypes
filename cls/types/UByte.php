<?php


namespace cls\types;
use Exception;

/**
 * Class UByte
 * @package cls\types
 */
class UByte extends Number
{

  /**
   * @param int $value
   * @return mixed|void
   * @throws Exception
   */
  protected function restrictions( int $value ) : void
  {
    $this -> class_name = __CLASS__;
    $this -> max = 255;
    $this -> min = 0;
    $this -> byte_length = 1;
    $this -> chk_max( $value );
    $this -> chk_min( $value );

    $this -> value = $value;
  }

}