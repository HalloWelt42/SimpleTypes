<?php


namespace cls\types;



use Exception;
use RuntimeException;

/**
 * Class UDWord
 * @package cls\types
 */
class UDWord extends Number
{

  /**
   * UDWord constructor.
   * @param int $value
   */
  public function __construct(int $value = 0)
  {
    $this->class_name = __CLASS__;
    $this -> min = 0;
    $this -> max = 4294967295;
    $this -> byte_length = 4;

    if( PHP_INT_MAX === 2147483647 ){
      throw new RuntimeException;
    }
    parent::__construct($value);
  }

  /**
   * @param int $value
   * @throws Exception
   */
  protected function restrictions( int $value ) : void {

    $this -> chk_max( $value );
    $this -> chk_min( $value );
    $this -> value = $value;

  }

}