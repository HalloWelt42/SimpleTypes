<?php


namespace cls\types\string_operations;

use cls\types\StringType;

/**
 * Trait TControlCharacter
 * @package cls\types\string_operations
 */
trait TControlCharacter
{
  /**
   * @return $this
   */
  public function nl() : self {
    $this->str .=  PHP_EOL;
    return $this;
  }

  public function tab() : self {
    $this->str .= "\t";
    return $this;
  }



}