<?php


namespace cls\types\string_operations;
use ArrayObject;
use cls\types\ArrayType;

/**
 * Trait TExplode
 * @package cls\types\string_operations
 */
trait TExplode
{

  /**
   * @param string $delimiter
   * @param int $limit
   * @return ArrayType
   */
  public function explode( string $delimiter , int $limit = PHP_INT_MAX ) : ArrayType
  {
    return new ArrayType(
        explode( $delimiter , $this -> str , $limit )
    );
  }

}