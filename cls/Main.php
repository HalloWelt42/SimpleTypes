<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 16.03.19
 * Time: 17:33
 */

namespace cls;

use cls\types\ArrayType;
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
       [6,2,5]
   );


   print_r($a ->asort());

  }


}