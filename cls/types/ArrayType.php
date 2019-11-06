<?php


namespace cls\types;

use ArrayObject;
use cls\types\array_operations\TPreDefinedArrayOperations;

// https://stackoverflow.com/questions/29319031/extending-arrayobject-why-does-get-object-vars-return-an-empty-array
class ArrayType extends ArrayObject
{

  public function __construct($input = array(), $flags = 0, $iterator_class = 'ArrayIterator')
  {
    parent::__construct($input, $flags, $iterator_class);
//    print_r(get_object_vars($this));
  }

//  use TPreDefinedArrayOperations;

  /**
   * @var ArrayObject
   */
//  private $arr_obj;

  /**
   * ArrayType constructor.
   * @param array $arr_obj
   */
//  public function __construct( array $arr_obj = [] )
//  {
//    $this -> arr_obj = new ArrayObject( $arr_obj );
//  }

}