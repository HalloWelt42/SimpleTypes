<?php


namespace cls\types\string_operations;


trait TMetaphone
{

  /**
   * @param int $max
   * @return $this
   */
  public function metaphone($max = 0): self
  {
    $this->str = metaphone($this->str, $max);
    return $this;
  }


}