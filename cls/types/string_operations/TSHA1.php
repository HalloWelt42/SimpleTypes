<?php


namespace cls\types\string_operations;

/**
 * Trait TSHA1
 * @package cls\types\string_operations
 */
trait TSHA1
{

  /**
   * @return $this
   */
  public function sha1(): self
  {
    $this->str = sha1($this->str);
    return $this;
  }

}