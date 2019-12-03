<?php


namespace cls\types\string_operations;

/**
 * Trait Tltrim
 * @package cls\types\string_operations
 */
trait Tltrim
{

  /**
   * @param string $charlist
   * @return $this
   */
  public function ltrim($charlist = " \t\n\r\0\x0B"): self
  {
    $this->str = ltrim($this->str, $charlist);
    return $this;
  }


}