<?php


namespace cls\types\string_operations;

/**
 * Trait TUnix2UnixDecode
 * @package cls\types\string_operations
 */
trait TUnix2UnixDecode
{
  /**
   * @return $this
   */
  public function convert_uudecode() : self
  {
    $this->str=convert_uudecode( $this->str );
    return $this;
  }
}