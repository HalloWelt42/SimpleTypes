<?php


namespace cls\types;


use cls\types\chr_operations\TPreDefinedChrOperations;
use cls\types\string_operations\TPreDefinedStringOperations;
use JsonSerializable;
use RuntimeException;

/**
 * Class ChrType
 * @package cls\types
 */
class ChrType implements JsonSerializable
{

  use TPreDefinedChrOperations;
  use TPreDefinedStringOperations;

  /**
   * @var string
   */
  protected string $str;


  /**
   * StringType constructor.
   * @param string $value
   */
  public function __construct(string $value = '')
  {
    $this->str = '';
    if ($value !== '') {
      $this->set($value);
    }
  }

  /**
   * @param string $value
   * @return ChrType
   */
  public function set(string $value): ChrType
  {
    if (mb_strlen($value) > 1) {
      throw new RuntimeException();//todo : msg ergänzen
    }
    $this->str = $value;
    return $this;
  }


  /**
   * @return string
   */
  public function __toString(): string
  {
    return $this->str;
  }

  /**
   * @return string
   */
  public function __invoke(): string
  {
    return $this->str;
  }

  /**
   * Specify data which should be serialized to JSON
   * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
   * @return mixed data which can be serialized by <b>json_encode</b>,
   * which is a value of any type other than a resource.
   * @since 5.4.0
   */
  public function jsonSerialize()
  {
    return $this->str;
  }


}