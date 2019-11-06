<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 20.10.19
 * Time: 00:53
 */

namespace cls\types\string_operations;

use cls\types\UByte;

trait TBin2Hex
{

  /**
   * Wandelt Binär-Daten in ihre hexadezimale Entsprechung um
   *
   * @return UByte
   */
  public function chr2hex() : UByte
  {
    return new UByte(
        bin2hex( $this -> str )
    );

  }


  /**
   * similar function to chr2hex
   *
   * @return UByte
   */
  public function bin2hex() : UByte
  {
    return $this -> chr2hex();
  }


}