<?php


namespace cls\types\string_operations;


trait THex2Bin
{

  /**
   * @return $this
   */
  public function hex2bin() : self {
    $this -> str = hex2bin( $this -> str );
    return $this;
  }

}