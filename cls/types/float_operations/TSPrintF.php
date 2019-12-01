<?php


namespace cls\types\float_operations;

use cls\types\StringType;

/**
 * Trait TPrintF
 * @package cls\types\float_operations
 */
trait TSPrintF
{

  /**
   * @return StringType
   */
  public function get_format_binary(): StringType
  {
    return new StringType(
        sprintf('%b', $this->value)
    );
  }

  /**
   * @param bool $upper_case
   * @return StringType
   */
  public function get_format_hex($upper_case = false): StringType
  {
    return new StringType(
        sprintf($upper_case ? '%X' : '%x', $this->value)
    );
  }

  /**
   * @return StringType
   */
  public function get_format_oct(): StringType
  {
    return new StringType(
        sprintf('%o', $this->value)
    );
  }

  /**
   * @return StringType
   */
  public function get_format_int(): StringType
  {
    return new StringType(
        sprintf('%d', $this->value)
    );
  }

  /**
   * @param bool $upper_case
   * @return StringType
   */
  public function get_format_e($upper_case = false): StringType
  {
    return new StringType(
        sprintf($upper_case ? '%E' : '%e', $this->value)
    );
  }

  /**
   * @param bool $depend_local
   * @return StringType
   */
  public function get_format_f($depend_local = false): StringType
  {
    return new StringType(
        sprintf($depend_local ? '%f' : '%F', $this->value)
    );
  }

  /**
   * @param bool $upper_case
   * @return StringType
   */
  public function get_format_g($upper_case = false): StringType
  {
    return new StringType(
        sprintf($upper_case ? '%G' : '%g', $this->value)
    );
  }

  /**
   * @return StringType
   */
  public function get_format_string(): StringType
  {
    return new StringType(
        sprintf('%s', $this->value)
    );
  }

  /**
   * @return StringType
   */
  public function get_format_uint(): StringType
  {
    return new StringType(
        sprintf('%u', $this->value)
    );
  }

}