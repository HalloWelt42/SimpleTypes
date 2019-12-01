<?php


namespace cls\types;

use ArrayAccess;
use ArrayObject;
use cls\types\array_operations\TPreDefinedArrayOperations;
use Countable;
use IteratorAggregate;
use JsonSerializable;
use Serializable;
use Traversable;

// https://stackoverflow.com/questions/29319031/extending-arrayobject-why-does-get-object-vars-return-an-empty-array

/**
 * Class ArrayType
 * @package cls\types
 */
class ArrayType implements JsonSerializable, IteratorAggregate, ArrayAccess, Serializable, Countable
{
  use TPreDefinedArrayOperations;

  public const STD_PROP_LIST = 1;
  public const ARRAY_AS_PROPS = 2;


  /**
   * @var ArrayObject
   */
    protected ArrayObject $arr_obj;

    /**
     * ArrayType constructor.
     *
     * @param array  $arr
     * @param int    $flags
     * @param string $iterator_class
     */
  public function __construct($arr = [], $flags = 0, $iterator_class = 'ArrayIterator')
  {
    $this->arr_obj = new ArrayObject($arr, $flags, $iterator_class);
  }

  /**
   * @param string $name
   * @return mixed
   */
  public function __get($name)
  {
    return $this->arr_obj->$name;
  }

  /**
   * @param string $name
   * @param mixed $value
   * @return void
   */
  public function __set($name, $value)
  {
    $this->arr_obj->$name = $value;
  }

  /**
   * @param string $name
   * @return bool
   */
  public function __isset($name)
  {
    return isset($this->arr_obj->$name);
  }

  /**
   * @param string $name
   */
  public function __unset($name)
  {
    unset($this->arr_obj->$name);
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

  /**
   * Retrieve an external iterator
   * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
   * @return Traversable An instance of an object implementing <b>Iterator</b> or
   * <b>Traversable</b>
   * @since 5.0.0
   */
  public function getIterator()
  {
    return $this->get_iterator();
  }

  /**
   * Whether a offset exists
   * @link https://php.net/manual/en/arrayaccess.offsetexists.php
   * @param mixed $offset <p>
   * An offset to check for.
   * </p>
   * @return bool true on success or false on failure.
   * </p>
   * <p>
   * The return value will be casted to boolean if non-boolean was returned.
   * @since 5.0.0
   */
  public function offsetExists($offset)
  {
    return $this->offset_exists_mixed($offset);
  }

  /**
   * Offset to retrieve
   * @link https://php.net/manual/en/arrayaccess.offsetget.php
   * @param mixed $offset <p>
   * The offset to retrieve.
   * </p>
   * @return mixed Can return all value types.
   * @since 5.0.0
   */
  public function offsetGet($offset)
  {
    return $this->offset_get_mixed($offset);
  }

  /**
   * Offset to set
   * @link https://php.net/manual/en/arrayaccess.offsetset.php
   * @param mixed $offset <p>
   * The offset to assign the value to.
   * </p>
   * @param mixed $value <p>
   * The value to set.
   * </p>
   * @return void
   * @since 5.0.0
   */
  public function offsetSet($offset, $value)
  {
    $this->offset_set_mixed($offset, $value);
  }

  /**
   * Offset to unset
   * @link https://php.net/manual/en/arrayaccess.offsetunset.php
   * @param mixed $offset <p>
   * The offset to unset.
   * </p>
   * @return void
   * @since 5.0.0
   */
  public function offsetUnset($offset)
  {
    $this->offset_unset_index($offset);
  }

  /**
   * String representation of object
   * @link https://php.net/manual/en/serializable.serialize.php
   * @return string the string representation of the object or null
   * @since 5.1.0
   */
  public function serialize()
  {
    return $this->arr_obj->serialize();
  }

  /**
   * Constructs the object
   * @link https://php.net/manual/en/serializable.unserialize.php
   * @param string $serialized <p>
   * The string representation of the object.
   * </p>
   * @return void
   * @since 5.1.0
   */
  public function unserialize($serialized)
  {
    $this->arr_obj->unserialize($serialized);
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


}