<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 16.03.19
 * Time: 17:33
 */

namespace cls;


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
    (new StringType("Hallo Welt!"))
        ->str_ireplace('hallo','HALLO',$i)
        ->nl()
        ->echo();

    print_r($i);
  }


}