<?php


namespace cls\types\string_operations;


trait TUnix2UnixEncode
{

  /**
   * @return $this
   */
  public function convert_uuencode() : self
  {
    $this->str = convert_uuencode($this->str);
    return $this;
  }

}