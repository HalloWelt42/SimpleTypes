<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 16.03.19
 * Time: 17:33
 */

namespace cls;

use ArrayObject;
use cls\types\ArrayType;
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
        (new ArrayType([1,2,3]))
    );

  }


}