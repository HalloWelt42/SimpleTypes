<?php


namespace cls\types\string_operations;

/**
 * Trait TNlToBr
 * @package cls\types\string_operations
 */
trait TNlToBr
{

  /**
   * @param bool $is_xml
   * @return $this
   */
  public function nl2br($is_xml = true): self
  {
    $this->str = nl2br($this->str, $is_xml);
    return $this;
  }


}