<?php


namespace cls\types\string_operations;


trait TEcho
{

  /**
   * @param int $times
   * @return $this
   */
  public function echo($times = 1)
  {
    echo str_repeat($this->str, $times);
    return $this;
  }
}