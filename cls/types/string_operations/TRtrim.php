<?php


namespace cls\types\string_operations;


trait TRtrim
{

  /**
   * @param string $charlist
   * @return $this
   */
  public function rtrim(string $charlist = " \t\n\r\0\x0B"): self
  {
    $this->str = rtrim($this->str, $charlist);
    return $this;
  }

}