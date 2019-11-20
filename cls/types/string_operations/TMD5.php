<?php


namespace cls\types\string_operations;

/**
 * Trait TMD5
 * @package cls\types\string_operations
 */
trait TMD5
{

  /**
   * @return $this
   */
  public function md5(): self
  {
    $this->str = md5($this->str, false);
    return $this;
  }


  /**
   * @return $this
   */
  public function md5_raw_binary(): self
  {
    $this->str = md5($this->str, true);
    return $this;
  }

}