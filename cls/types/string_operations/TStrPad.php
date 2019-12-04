<?php


namespace cls\types\string_operations;


trait TStrPad
{



  /**
   * @param int $pad_length
   * @param string $pad_string
   * @param int $pad_type ( opt. STR_PAD_RIGHT, STR_PAD_LEFT  STR_PAD_BOTH )
   * @return $this
   */
  public function str_pad(int $pad_length =0, string $pad_string='', int $pad_type=STR_PAD_RIGHT): self
  {
    $this->str = str_pad($this->str, $pad_length, $pad_string, $pad_type);
    return $this;
  }

}