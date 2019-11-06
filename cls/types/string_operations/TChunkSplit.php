<?php


namespace cls\types\string_operations;


use cls\types\StringType;

trait TChunkSplit
{

  /**
   * @param int $chunklen
   * @param string $end
   * @return $this
   */
  public function chunk_split(int $chunklen = 76, string $end = "\r\n") : self
  {
    $this->str = chunk_split($this->str, $chunklen, $end);
    return $this;
  }

}