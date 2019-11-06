<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 24.10.19
 * Time: 20:59
 */

namespace cls\types;
use Exception;

/**
 * Class Number
 * @package cls\types
 */
abstract class Number
{

  /**
   * @var int
   */
  protected $value;

  /**
   * @var int
   */
  protected $max;

  /**
   * @var int
   */
  protected $min;

  /**
   * @var self
   */
  protected $class_name;

  /**
   * @var int
   */
  protected $byte_length;

  /**
   * Number constructor.
   * @param int $value
   */
  public function __construct( int $value = 0 ){
    $this -> restrictions( $value );
  }

  /**
   * @param $value
   * @return mixed
   */
  abstract protected function restrictions( int $value );

  /**
   * @param int $value
   * @return $this
   */
  public function set( int $value ) : self {
    $this -> restrictions( $value );
    return $this;
  }


  /**
   * @return $this
   */
  public function reset() : self {
    $this -> value = 0;
    return $this;
  }


  /**
   * @return $this
   */
  public function init_max() : self {
    $this -> value = $this -> max;
    return $this;
  }

  /**
   * @return $this
   */
  public function init_min() : self {
    $this -> value = $this -> min;
    return $this;
  }

  /**
   * @param $value
   * @throws Exception
   */
  protected function chk_max( $value ) : void {
    if( $value > $this -> max ){
      throw new Exception( "{$this -> class_name} > {$this -> max}" );
    }
  }

  /**
   * @param $value
   * @throws Exception
   */
  protected function chk_min( $value ) : void {
    if ( $value < $this -> min ){
      throw  new Exception( "{$this -> class_name} < {$this -> min}");
    }
  }

  /**
   * @return int
   */
  public function get_byte_length() : int {
    return $this -> byte_length;
  }

  /**
   * @return int
   */
  public function __invoke() : int
  {
    return $this -> value;
  }


  /**
   * @return string
   */
  public function __toString() : string
  {
    return $this -> value . '';
  }

}