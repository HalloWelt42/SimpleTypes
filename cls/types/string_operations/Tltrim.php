<?php


namespace cls\types\string_operations;

/**
 * Trait Tltrim
 * @package cls\types\string_operations
 */
trait Tltrim
{

  /**
   * @return $this
   */
  public function ltrim(): self
  {
    $this->str = ltrim($this->str);
    return $this;
  }


}