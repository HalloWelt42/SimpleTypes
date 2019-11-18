<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 16.03.19
 * Time: 14:20
 */

namespace cls\types;

use cls\types\number_operations\TPreDefinedIntOperations;
use Exception;

/**
 * Class IntType
 * @package cls\types
 */
class IntType extends Number
{

  use TPreDefinedIntOperations;

  /**
   * IntType constructor.
   * @param int $value
   */
  public function __construct(int $value = 0)
  {
    $this->min = PHP_INT_MIN;
    $this->byte_length = PHP_INT_SIZE;
    $this->max = PHP_INT_MAX;
    $this->class_name = __CLASS__;
    parent::__construct($value);
  }

  /**
   * @param int $value
   * @throws Exception
   */
  protected function restrictions(int $value): void
  {
    $this->chk_max($value);
    $this->chk_min($value);

    $this->value = $value;
  }


}