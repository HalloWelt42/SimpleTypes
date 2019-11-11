<?php


namespace cls\types;

use ArrayObject;
use cls\types\array_operations\TPreDefinedArrayOperations;

// https://stackoverflow.com/questions/29319031/extending-arrayobject-why-does-get-object-vars-return-an-empty-array
class ArrayType
{
  use TPreDefinedArrayOperations;

  public const STD_PROP_LIST = 1 ;
  public const ARRAY_AS_PROPS = 2 ;

  /**
   * TODO
   * Array mit optional fester Länge
   */
  public const FIXED = 4 ;

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


}