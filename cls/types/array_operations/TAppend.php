<?php


namespace cls\types\array_operations;


use ArrayObject;

trait TAppend
{


  /**
   * @param $type
   * @return $this
   */
  public function append( $type ): self
  {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    $obj -> append( $type );
    return $this;

  }


}