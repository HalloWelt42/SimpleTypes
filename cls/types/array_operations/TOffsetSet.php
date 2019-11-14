<?php


namespace cls\types\array_operations;


use ArrayObject;

/**
 * Trait TOffsetSet
 * @package cls\types\array_operations
 */
trait TOffsetSet
{

  /**
   * @param $i
   * @param $val
   * @return $this
   */
  public function offset_set_mixed( $i, $val): self
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    $obj->offsetSet($i, $val);
    return $this;
  }

  /**
   * @param int $i
   * @param $val
   * @return TOffsetSet
   */
  public function offset_set_index(int $i, $val): self
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    $obj->offsetSet($i, $val);
    return $this;
  }

  public function offset_set_key(string $key, $val): self
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    $obj->offsetSet($key, $val);
    return $this;
  }

}