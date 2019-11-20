<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 16.03.19
 * Time: 17:33
 */

namespace cls;


use cls\types\FloatType;
use cls\types\StringType;

/**
 * Class Main
 * @package cls
 */
class Main
{

  /**
   * Main constructor.
   */
  public function __construct()
  {

    print_r(
        (new FloatType(123.56 ))()
    );


  }


}