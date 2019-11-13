<?php


namespace cls\types\array_operations;


use ArrayObject;

/**
 * Trait TOffsetUnset
 * @package cls\types\array_operations
 */
trait TOffsetUnset
{

  /**
   * @param int $index
   * @return $this
   */
  public function offset_unset_index(int $i ): self
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this -> arr_obj;
    $obj->offsetUnset($i);
    return $this;
  }

  /**
   * @param string $key
   * @return $this
   */
  public function offset_unset_assoc( string $key ): self
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this -> arr_obj;
    $obj->offsetUnset($key);
    return $this;
  }
}