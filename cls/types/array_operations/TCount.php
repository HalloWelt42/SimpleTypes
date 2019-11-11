<?php


namespace cls\types\array_operations;


use ArrayObject;
use cls\types\IntType;

trait TCount
{

  /**
   * @return IntType
   */
  public function count() : IntType
  {
    /**
     * @var $obj ArrayObject
     */
    $obj = $this->arr_obj;
    return new IntType(
        $obj->count()
    );

  }

}