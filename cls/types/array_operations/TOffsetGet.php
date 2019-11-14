<?php


namespace cls\types\array_operations;

use ArrayObject;

/**
 * Trait TOffsetGet
 * @package cls\types\array_operations
 */
trait TOffsetGet
{


  /**
   * @param string|int $i
   * @return mixed
   */
  public function offset_get_mixed(string $i)
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    return $obj->offsetGet($i);
  }

  /**
   * @param int $i
   * @return mixed
   */
  public function offset_get_index(int $i)
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    return $obj->offsetGet($i);
  }

  /**
   * @param string $key
   * @return mixed
   */
  public function offset_get_assoc(string $key)
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    return $obj->offsetGet($key);
  }

}