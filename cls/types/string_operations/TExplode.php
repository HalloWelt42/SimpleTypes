<?php


namespace cls\types\string_operations;
use ArrayObject;

trait TExplode
{

  /**
   * @param string $delimiter
   * @param int $limit
   * @return ArrayObject
   */
  public function explode( string $delimiter , int $limit = PHP_INT_MAX ) : ArrayObject {
    return new ArrayObject(
        explode( $delimiter , $this -> str , $limit )
    );
  }

}