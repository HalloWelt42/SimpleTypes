<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 16.03.19
 * Time: 17:33
 */

namespace cls;

use cls\types\ArrayType;
use cls\types\StringType;
use ReflectionClass;
use ReflectionException;

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

    $a = new ArrayType(
        ['obj'=>9, 1, 2, 3],ArrayType::ARRAY_AS_PROPS
    );

    print_r(

    $a
    );

  }


}