<?php


namespace cls\types\std_lib;


use cls\types\ArrayType;
use cls\types\ChrType;
use cls\types\StringType;
use cls\types\UInt8;

/**
 * Class LocaleConv
 * gibt Daten basierend auf den aktuellen Locale-Einstellungen,
 * wie sie mittels setlocale() festgelegt werden können, zurück.
 *
 * @package cls\types\std_lib
 */
class LocaleConv
{

  /**
   * @var ChrType
   */
  private $decimal_point;

  /**
   * @var ChrType
   */
  private $thousands_sep;

  /**
   * @var ArrayType
   */
  private $grouping;

  /**
   * @var StringType
   */
  private $int_curr_symbol;

  /**
   * @var StringType
   */
  private $currency_symbol;

  /**
   * @var ChrType
   */
  private $mon_decimal_point;

  /**
   * @var ChrType
   */
  private $mon_thousands_sep;

  /**
   * @var ArrayType
   */
  private $mon_grouping;

  /**
   * @var ChrType
   */
  private $positive_sign;

  /**
   * @var ChrType
   */
  private $negative_sign;

  /**
   * @var UInt8
   */
  private $int_frac_digits;

  /**
   * @var UInt8
   */
  private $frac_digits;

  /**
   * @var bool
   */
  private $p_cs_precedes;

  /**
   * @var bool
   */
  private $p_sep_by_space;

  /**
   * @var bool
   */
  private $n_cs_precedes;

  /**
   * @var bool
   */
  private $n_sep_by_space;

  /**
   * @var UInt8
   */
  private $p_sign_posn;

  /**
   * @var UInt8
   */
  private $n_sign_posn;

  /**
   * LocaleConv constructor.
   */
  public function __construct()
  {
    /**
     * @var $arr_params array
     */
    $arr_params = localeconv();
    $this->decimal_point = new ChrType($arr_params['decimal_point']);
    $this->thousands_sep = new ChrType($arr_params['thousands_sep']);
    $this->int_curr_symbol = new StringType($arr_params['int_curr_symbol']);
    $this->currency_symbol = new StringType($arr_params['currency_symbol']);
    $this->mon_decimal_point = new ChrType($arr_params['mon_decimal_point']);
    $this->mon_thousands_sep = new ChrType($arr_params['mon_thousands_sep']);
    $this->mon_grouping = new ArrayType($arr_params['mon_grouping']);
    $this->grouping = new ArrayType($arr_params['grouping']);
    $this->positive_sign = new ChrType($arr_params['positive_sign']);
    $this->negative_sign = new ChrType($arr_params['negative_sign']);
    $this->int_frac_digits = new UInt8($arr_params['int_frac_digits']);
    $this->frac_digits = new UInt8($arr_params['frac_digits']);
    $this->n_cs_precedes = (bool)$arr_params['n_cs_precedes'];
    $this->p_cs_precedes = (bool)$arr_params['p_cs_precedes'];
    $this->p_sep_by_space = (bool)$arr_params['p_sep_by_space'];
    $this->n_cs_precedes = (bool)$arr_params['n_cs_precedes'];
    $this->n_sep_by_space = (bool)$arr_params['n_sep_by_space'];
    $this->p_sign_posn = new UInt8($arr_params['p_sign_posn']);
    $this->n_sign_posn = new UInt8($arr_params['n_sign_posn']);
  }

  /**
   * @return ArrayType
   */
  public function get()
  {
  }

  /**
   * Dezimaltrennzeichen
   *
   * @return ChrType
   */
  public function get_decimal_point(): ChrType
  {
    return $this->decimal_point;
  }

  /**
   * Tausendertrennzeichen
   *
   * @return ChrType
   */
  public function get_thousands_sep(): ChrType
  {
    return $this->thousands_sep;
  }

  /**
   * Array mit numerischen Gruppierungen
   *
   * @return ArrayType
   */
  public function get_grouping(): ArrayType
  {
    return $this->grouping;
  }

  /**
   * Internationales Währungssymbol (i.e. USD)
   *
   * @return StringType
   */
  public function get_int_curr_symbol(): StringType
  {
    return $this->int_curr_symbol;
  }

  /**
   * Lokales Währungssymbol (i.e. $)
   *
   * @return StringType
   */
  public function get_currency_symbol(): StringType
  {
    return $this->currency_symbol;
  }

  /**
   * Dezimaltrennzeichen bei Geldbeträgen
   *
   * @return ChrType
   */
  public function get_mon_decimal_point(): ChrType
  {
    return $this->mon_decimal_point;
  }

  /**
   * Tausendertrennzeichen bei Geldbeträgen
   *
   * @return ChrType
   */
  public function get_mon_thousands_sep(): ChrType
  {
    return $this->mon_thousands_sep;
  }

  /**
   * Array mit Geldbetragsgruppierungen
   *
   * @return ArrayType
   */
  public function get_mon_grouping(): ArrayType
  {
    return $this->mon_grouping;
  }

  /**
   * Vorzeichen für positive Werte
   *
   * @return ChrType
   */
  public function get_positive_sign(): ChrType
  {
    return $this->positive_sign;
  }

  /**
   * Vorzeichen für negative Werte
   *
   * @return ChrType
   */
  public function get_negative_sign(): ChrType
  {
    return $this->negative_sign;
  }

  /**
   * Internationale Dezimalbrüche
   *
   * @return UInt8
   */
  public function get_int_frac_digits(): UInt8
  {
    return $this->int_frac_digits;
  }

  /**
   * Lokale Dezimalbrüche
   *
   * @return UInt8
   */
  public function get_frac_digits(): UInt8
  {
    return $this->frac_digits;
  }

  /**
   * Ist TRUE, wenn das Währungssymbol einem positiver Wert voransteht,
   * oder FALSE, wenn es einem positiven Wert folgt.
   *
   * @return bool
   */
  public function get_p_cs_precedes(): bool
  {
    return $this->p_cs_precedes;
  }

  /**
   * Ist TRUE, wenn ein Leerzeichen das Währungssymbol von einem positiven Wert trennt,
   * ansonsten FALSE.
   *
   * @return bool
   */
  public function get_p_sep_by_space(): bool
  {
    return $this->p_sep_by_space;
  }

  /**
   * Ist TRUE, wenn das Währungssymbol einem negativer Wert voransteht,
   * oder FALSE, wenn es einem negativen Wert folgt.
   *
   * @return bool
   */
  public function get_n_cs_precedes(): bool
  {
    return $this->n_cs_precedes;
  }

  /**
   *
   * Ist TRUE, wenn ein Leerzeichen das Währungssymbol von einem negativen Wert trennt,
   * ansonsten FALSE.
   *
   * @return bool
   */
  public function get_n_sep_by_space(): bool
  {
    return $this->n_sep_by_space;
  }

  /**
   * 0 - Klammern um Menge und Währungssymbol
   * 1 - Das Vorzeichen steht vor Menge und Währungssymbol
   * 2 - Das Vorzeichen steht hinter Menge und Währungssymbol
   * 3 - Das Vorzeichen steht direkt vor Menge und Währungssymbol
   * 4 - Das Vorzeichen steht direkt hinter Menge und Währungssymbol
   *
   * @return UInt8
   */
  public function get_p_sing_posn(): UInt8
  {
    return $this->p_sign_posn;
  }

  /**
   * 0 - Klammern um Menge und Währungssymbol
   * 1 - Das Vorzeichen steht vor Menge und Währungssymbol
   * 2 - Das Vorzeichen steht hinter Menge und Währungssymbol
   * 3 - Das Vorzeichen steht direkt vor Menge und Währungssymbol
   * 4 - Das Vorzeichen steht direkt hinter Menge und Währungssymbol
   *
   * @return UInt8
   */
  public function get_n_sign_posn(): UInt8
  {
    return $this->n_sign_posn;
  }


}