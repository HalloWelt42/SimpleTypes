<?php


namespace cls\types\array_operations;


use ArrayObject;

/**
 * Trait TOffsetExists
 * @package cls\types\array_operations
 */
trait TOffsetExists
{

  /**
   * @param int $i
   * @return bool
   */
  public function offset_exists_index(int $i): bool
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    return $obj->offsetExists($i);
  }


  /**
   * @param string $key
   * @return bool
   */
  public function offset_exists_assoc(string $key): bool
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    return $obj->offsetExists($key);
  }

}