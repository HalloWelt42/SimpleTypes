<?php


namespace cls\types\std_lib;


use cls\types\ArrayType;
use cls\types\ChrType;
use cls\types\StringType;
use cls\types\UInt8;

/**
 * Class LocaleConv
 * @package cls\types\std_lib
 */
class LocaleConv
{

  private $decimal_point;
  private $thousands_sep;
  private $grouping;
  private $int_curr_symbol;
  private $currency_symbol;
  private $mon_decimal_point;
  private $mon_thousands_sep;
  private $mon_grouping;
  private $positive_sign;
  private $negative_sign;
  private $int_frac_digits;
  private $frac_digits;
  private $p_cs_precedes;
  private $p_sep_by_space;
  private $n_cs_precedes;
  private $n_sep_by_space;
  private $p_sign_posn;
  private $n_sign_posn;

  /**
   * @var ArrayType
   */
  private $arr_obj;

  /**
   * LocaleConv constructor.
   */
  public function __construct()
  {
    $arr_params = localeconv();
    $this->decimal_point = new ChrType($arr_params['decimal_point']);
    $this->thousands_sep = new ChrType($arr_params['thousands_sep']);
    $this->int_curr_symbol = new StringType($arr_params['int_curr_symbol']);
    $this->currency_symbol = new StringType($arr_params['currency_symbol']);
    $this->mon_decimal_point = new ChrType($arr_params['mon_decimal_point']);
    $this->mon_thousands_sep = new ChrType($arr_params['mon_thousands_sep']);
    $this->mon_grouping = new ArrayType($arr_params['mon_grouping']);
    $this->positive_sign = new ChrType($arr_params['positive_sign']);
    $this->negative_sign = new ChrType($arr_params['negative_sign']);
    $this->int_frac_digits = new UInt8($arr_params['int_frac_digits']);
    $this->frac_digits = new UInt8($arr_params['frac_digits']);
    $this->n_cs_precedes = (bool)$arr_params['n_cs_precedes'];
    $this->p_sep_by_space = (bool)$arr_params['p_sep_by_space'];
    $this->n_cs_precedes = (bool)$arr_params['n_cs_precedes'];
    $this->n_sep_by_space = (bool)$arr_params['n_sep_by_space'];
    $this->p_sign_posn = new UInt8($arr_params['p_sign_posn']);

    $this->arr_obj = new ArrayType($arr_params);

  }

  /**
   * @return ArrayType
   */
  public function get()
  {
    return $this->arr_obj;
  }

  /**
   * @return ChrType
   */
  public function get_decimal_point(): ChrType
  {
    return $this->decimal_point;
  }

  /**
   * @return mixed
   */
  public function get_thousands_sep()
  {
    return $this->thousands_sep;
  }

  /**
   * @return mixed
   */
  public function get_grouping()
  {
    return $this->grouping;
  }

  /**
   * @return mixed
   */
  public function get_int_curr_symbol()
  {
    return $this->int_curr_symbol;
  }

  /**
   * @return mixed
   */
  public function get_currency_symbol()
  {
    return $this->currency_symbol;
  }

  /**
   * @return mixed
   */
  public function get_mon_decimal_point()
  {
    return $this->mon_decimal_point;
  }

  /**
   * @return mixed
   */
  public function get_mon_thousands_sep()
  {
    return $this->mon_thousands_sep;
  }

  /**
   * @return mixed
   */
  public function get_mon_grouping()
  {
    return $this->mon_grouping;
  }

  /**
   * @return mixed
   */
  public function get_positive_sign()
  {
    return $this->positive_sign;
  }

  /**
   * @return mixed
   */
  public function get_negative_sign()
  {
    return $this->negative_sign;
  }

  /**
   * @return mixed
   */
  public function get_int_frac_digits()
  {
    return $this->int_frac_digits;
  }

  /**
   * @return mixed
   */
  public function get_frac_digits()
  {
    return $this->frac_digits;
  }

  /**
   * @return mixed
   */
  public function get_p_cs_precedes()
  {
    return $this->p_cs_precedes;
  }

  /**
   * @return mixed
   */
  public function get_p_sep_by_space()
  {
    return $this->p_sep_by_space;
  }

  /**
   * @return mixed
   */
  public function get_n_cs_precedes()
  {
    return $this->n_cs_precedes;
  }

  /**
   * @return mixed
   */
  public function get_n_sep_by_space()
  {
    return $this->n_sep_by_space;
  }

  /**
   * @return mixed
   */
  public function get_p_sing_posn()
  {
    return $this->p_sign_posn;
  }

  /**
   * @return mixed
   */
  public function get_n_sign_posn()
  {
    return $this->n_sign_posn;
  }


}