<?php


namespace cls\types;
use Exception;

class UWord extends IntNumber
{

  /**
   * @param int $value
   * @return mixed|void
   * @throws Exception
   */
  protected function restrictions(int $value)
  {
    $this -> class_name = __CLASS__;
    $this -> min = 0;
    $this -> max = 65535;
    $this -> byte_length = 2;
    $this -> chk_max( $value );
    $this -> chk_min( $value );

    $this -> value = $value;
  }

}