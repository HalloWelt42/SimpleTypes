<?php


namespace cls\types\array_operations;


use ArrayObject;

trait TSort
{

  /**
   * Sortiert Einträge
   *
   * @return $this
   */
  public function asort(): self
  {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    $obj->asort();
    return $this;
  }


  /**
   * Sortiert Einträge über Schlüssel sortieren
   *
   * @return $this
   */
  public function ksort() :self {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    $obj->ksort();
    return $this;
  }


  /**
   * Sortiert Einträge mit einer natürlichen Reihenfolge
   * @return $this
   */
  public function natsort() :self {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    $obj->natsort();
    return $this;
  }


  /**
   * Sortiert Einträge mit einer natürlichen Reihenfolge ohne Beachtung der Groß- und Kleinschreibung
   * @return $this
   */
  public function natcasesort() :self {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    $obj->natcasesort();
    return $this;
  }


  /**
   * Sortiert die Einträge mit einer benutzerdefinierten Vergleichsfunktion
   * und pflegt die Schlüsselzuordnung
   *
   * @param $cmp_function
   * @return $this
   */
  public function uasort( $cmp_function ) :self {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    $obj->uasort( $cmp_function );
    return $this;
  }


  /**
   * Sortiert die Einträge nach Schlüsseln mit einer benutzerdefinierten
   * Vergleichsfunktion
   *
   * @param $cmp_function
   * @return $this
   */
  public function uksort( $cmp_function ) :self {
    $obj = $this->arr_obj;
    /**
     * @var $obj ArrayObject
     */
    $obj->uksort($cmp_function );
    return $this;
  }

}

