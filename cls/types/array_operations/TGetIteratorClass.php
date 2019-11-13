<?php


namespace cls\types\array_operations;
use ArrayObject;

/**
 * Trait TGetIteratorClass
 * @package cls\types\array_operations
 */
trait TGetIteratorClass
{

  /**
   * @return string
   */
  public function get_iterator_class(): string
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    return $obj->getIteratorClass();
  }

}