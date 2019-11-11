<?php


namespace cls\types\array_operations;


use ArrayObject;

/**
 * Trait TGetArrayCopy
 * @package cls\types\array_operations
 */
trait TGetArrayCopy
{

  /**
   * @return array
   */
  public function get_array_copy(): array
  {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    return $obj->getArrayCopy();
  }

}