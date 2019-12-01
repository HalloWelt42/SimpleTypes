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
     (new StringType('ö'))
         ->String2Chr()
         ->ord()
         ->to_string_type()
         ->echo()
     ;



  }


}