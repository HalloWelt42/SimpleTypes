<?php


namespace cls\types\string_operations;


use cls\types\UInt32;
use mysql_xdevapi\Exception;

/**
 * Trait TCRC32
 * @package cls\types\string_operations
 */
trait TCRC32
{

  /**
   * @return UInt32
   */
  public function crc32() : UInt32
  {
    if( PHP_INT_MAX === 2147483647 ){
      throw new Exception;
    }

    return new UInt32(
        crc32( $this -> str )
    );

  }

}