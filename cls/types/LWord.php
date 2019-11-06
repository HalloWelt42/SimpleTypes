<?php


namespace cls\types;
use Exception;

/**
 * Class LWord
 * @package cls\types
 */
class LWord extends IntType
{

  /**
   * LWord constructor.
   * @param int $value
   * @throws Exception
   */
  public function __construct(int $value = 0)
  {
    if( PHP_INT_MAX === 2147483647 ){
      throw new Exception;
    }

    $this->min = -9223372036854775808;
    $this->byte_length = 8;
    $this->max = 9223372036854775807;
    $this->class_name = __CLASS__;

    parent::__construct($value);
  }

}