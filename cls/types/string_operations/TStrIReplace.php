<?php


namespace cls\types\string_operations;

use cls\types\IntType;

/**
 * Trait TStrIReplace
 * @package cls\types\string_operations
 */
trait TStrIReplace
{

  /**
   * @param string $search
   * @param string $replace
   * @param $count
   * @return $this
   */
  public function str_ireplace(string $search, string $replace,  &$count ): self
  {
    $this->str = str_ireplace($search, $replace, $this->str, $count );
    return $this;
  }


}