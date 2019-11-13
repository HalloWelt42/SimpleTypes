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

    $a = (new ArrayType([0, 1, 2, 3]))
        ->offset_set_key('ok', 'ACB')
        ->offset_unset_assoc(0);

    print_r($a->count() . PHP_EOL);


  }


}