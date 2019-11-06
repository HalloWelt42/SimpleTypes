<?php


namespace cls\types;

/**
 * Class Word
 * @package cls\types
 */
class Word extends IntType
{
  /**
   * @param int $value
   * @throws \Exception
   */
  protected function restrictions(int $value) : void
  {
    $this -> class_name = __CLASS__;
    $this -> max = 32767;
    $this -> min = -32768;
    $this -> byte_length = 2;
    $this -> chk_max( $value );
    $this -> chk_min( $value );

    $this -> value = $value;
  }
}