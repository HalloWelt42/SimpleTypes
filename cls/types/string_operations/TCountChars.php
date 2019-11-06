<?php


namespace cls\types\string_operations;

use ArrayObject;

trait TCountChars
{

  /**
   * Ein Array mit den Byte-Werten als Schlüssel und deren jeweiliger Häufigkeit als Wert.
   *
   * @return ArrayObject
   */
  public function count_chars_all(): ArrayObject
  {
    return new ArrayObject(
        count_chars($this->str, 0)
    );
  }

  /**
   * Ein Array mit den Byte-Werten als Schlüssel und deren jeweiliger Häufigkeit als Wert,
   * welche mindestens einmal vorkommen.
   *
   * @return ArrayObject
   */
  public function count_chars_hits(): ArrayObject
  {
    return new ArrayObject(
        count_chars($this->str, 1)
    );
  }

  /**
   * Ein Array mit den Byte-Werten als Schlüssel, aus nicht vorkommenden Zeichen.
   *
   * @return ArrayObject
   */
  public function count_chars_nonhits(): ArrayObject
  {
    return new ArrayObject(
        count_chars($this->str, 2)
    );
  }

  /**
   * Eine Zeichenkette, die alle vorkommenden Zeichen enthält.
   *
   * @return $this
   */
  public function hit_chars() : self
  {
    $this ->str = count_chars( $this->str, 3);
    return $this;
  }

  /**
   * Eine Zeichenkette, die alle nicht vorkommenden Zeichen enthält.
   *
   * @return $this
   */
  public function nonhit_chars() : self
  {
    $this ->str = count_chars( $this->str, 4);
    return $this;
  }


}