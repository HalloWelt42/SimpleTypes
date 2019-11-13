<?php


namespace cls\types;

use ArrayObject;
use cls\types\array_operations\TPreDefinedArrayOperations;
use JsonSerializable;

// https://stackoverflow.com/questions/29319031/extending-arrayobject-why-does-get-object-vars-return-an-empty-array
class ArrayType implements JsonSerializable
{
  use TPreDefinedArrayOperations;

  public const STD_PROP_LIST = 1;
  public const ARRAY_AS_PROPS = 2;

  /**
   * TODO
   * Array mit optional fester Länge
   */
  public const FIXED = 4;

  /**
   * TODO : FixedArray Klasse einplanen und testen
   * https://www.php.net/manual/de/class.splfixedarray.php
   *
   * @var ArrayObject
   */
  protected $arr_obj;

  /**
   * ArrayType constructor.
   * @param array $input
   * @param int $flags
   * @param string $iterator_class
   */
  public function __construct($input = [], $flags = 0, $iterator_class = 'ArrayIterator')
  {
    $this->arr_obj = new ArrayObject($input, $flags, $iterator_class);
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
    return $this->arr_obj;
  }

  /**
   * @return string
   */
  public function __toString()
  {
    return (string)json_encode($this, JSON_THROW_ON_ERROR . JSON_ERROR_RECURSION, 512);
  }

  /**
   * @return string
   */
  public function __invoke()
  {
    return (string)json_encode($this, JSON_THROW_ON_ERROR . JSON_ERROR_RECURSION, 512);
  }

}