<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 16.03.19
 * Time: 17:33
 */

namespace cls;

use cls\types\ArrayType;
use cls\types\ChrType;
use cls\types\std_lib\LocaleConv;
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
    setlocale (LC_ALL, 'de_DE@euro','de_DE', 'de', 'ge');

    print_r(
        (new LocaleConv())->get()
    );



  }


}