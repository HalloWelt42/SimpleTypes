<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 19.10.19
 * Time: 23:16
 */

namespace cls\types;

use cls\types\string_operations\TPreDefinedStringOperations;

class StringType
{
    use TPreDefinedStringOperations;


    /**
     * @var string
     */
    private $str;

  /**
   * StringType constructor.
   * @param string $value
   */
    public function __construct( string $value = '' )
    {
        $this -> set ( $value );
    }


  /**
   * @param string $value
   * @return $this
   */
    public function set( string $value ) : self
    {
        $this -> str = $value;
        return $this;
    }

  /**
   * @param string $value
   * @return $this
   */
    public function add( string $value ) : self {
      $this -> str .= $value;
      return $this;
    }


    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this -> str;
    }

  /**
   * @return string
   */
    public function __invoke() : string
    {
      return $this -> str;
    }

}