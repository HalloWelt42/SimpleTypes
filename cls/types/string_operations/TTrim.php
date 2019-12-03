<?php


namespace cls\types\string_operations;


trait TTrim
{
  /**
   * @param string $charlist
   * @return $this
   */
  public function trim(string $charlist = " \t\n\r\0\x0B"): self
  {
    $this->str = trim($this->str, $charlist);
    return $this;
  }
}