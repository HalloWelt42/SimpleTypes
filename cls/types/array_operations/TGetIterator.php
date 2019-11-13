<?php


namespace cls\types\array_operations;


use ArrayIterator;
use ArrayObject;

/**
 * Trait TGetIterator
 * @package cls\types\array_operations
 */
trait TGetIterator
{

  /**
   * @return ArrayIterator
   */
  public function get_iterator(): ArrayIterator
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this ->arr_obj;
    return $obj->getIterator();

  }

}