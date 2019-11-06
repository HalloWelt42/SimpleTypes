<?php


namespace cls\types;


class Byte extends IntType
{

  /**
   * @param int $value
   * @throws \Exception
   */
  protected function restrictions(int $value) : void
  {
    $this -> class_name = __CLASS__;
    $this -> max = 127;
    $this -> min = -128;
    $this -> byte_length = 1;
    $this -> chk_max( $value );
    $this -> chk_min( $value );

    $this -> value = $value;
  }
}