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
   * @param int $times
   * @return $this
   */
  public function nl($times = 1): self
  {
    $this->str .= str_repeat(PHP_EOL, $times);
    return $this;
  }

  /**
   * @param int $times
   * @return $this
   */
  public function tab($times = 1): self
  {
    $this->str .= str_repeat("\t", $times);
    return $this;
  }


}