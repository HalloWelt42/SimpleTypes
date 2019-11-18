<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 19.10.19
 * Time: 23:16
 */

namespace cls\types;

use cls\types\string_operations\TPreDefinedStringOperations;
use JsonSerializable;

/**
 * Class StringType
 * @package cls\types
 */
class StringType implements JsonSerializable
{
  use TPreDefinedStringOperations;


  /**
   * @var string
   */
  protected $str;

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
   * @return $this
   */
  public function set(string $value): self
  {
    $this->str = $value;
    return $this;
  }

  /**
   * @param string $value
   * @return $this
   */
  public function add(string $value): self
  {
    $this->str .= $value;
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