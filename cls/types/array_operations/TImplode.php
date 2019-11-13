<?php


namespace cls\types\array_operations;

use ArrayObject;
use cls\types\StringType;

/**
 * Trait TImplode
 * @package cls\types\array_operations
 */
trait TImplode
{

  /**
   * @param string $glue
   * @return StringType
   */
  public function implode($glue = ''): StringType
  {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    return new StringType(
        implode($glue, $obj->getArrayCopy())
    );
  }


}