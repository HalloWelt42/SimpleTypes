<?php


namespace cls\types\array_operations;


use ArrayObject;

trait TOffsetExists
{

  /**
   * @param $index
   * @return bool
   */
  public function offset_exists($index): bool
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    return $obj->offsetExists($index);
  }
}