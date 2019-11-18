<?php


namespace cls\types\string_operations;

/**
 * Trait TLCFirst
 * @package cls\types\string_operations
 */
trait TLCFirst
{
  /**
   * @return $this
   */
  public function lcfirst()
  {
    $this->str = lcfirst($this->str);
    return $this;
  }

}