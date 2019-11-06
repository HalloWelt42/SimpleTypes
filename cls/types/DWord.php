<?php


namespace cls\types;

/**
 * Class DWord
 * @package cls\types
 */
class DWord extends IntType
{
  /**
   * @param int $value
   * @throws \Exception
   */
  protected function restrictions(int $value) : void
  {
    $this -> class_name = __CLASS__;
    $this -> max = 2147483647;
    $this -> min = -2147483648;
    $this -> byte_length = 4;
    $this -> chk_max( $value );
    $this -> chk_min( $value );

    $this -> value = $value;
  }
}