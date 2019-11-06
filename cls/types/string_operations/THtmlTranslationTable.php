<?php


namespace cls\types\string_operations;

use ArrayObject;

trait THtmlTranslationTable
{

  /**
   * @param int $table
   * @param int $flags
   * @param string $encoding
   * @return ArrayObject
   */
  public function get_html_translation_table(
      int $table = HTML_SPECIALCHARS ,
      int $flags = ENT_COMPAT | ENT_HTML401 ,
      string $encoding = 'UTF-8'
  ) : ArrayObject {
    return new ArrayObject(
        get_html_translation_table(
            $table, $flags, $encoding
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_html5_translation_table_entities() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_ENTITIES,
            ENT_HTML5,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_xhtml_translation_table_entities() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_ENTITIES,
            ENT_XHTML,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_xml1_translation_table_entities() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_ENTITIES,
            ENT_XML1,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_html401_translation_table_entities() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_ENTITIES,
            ENT_HTML401,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_noquotes_translation_table_entities() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_ENTITIES,
            ENT_NOQUOTES,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_quotes_translation_table_entities() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_ENTITIES,
            ENT_QUOTES,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_compat_translation_table_entities() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_ENTITIES,
            ENT_COMPAT,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_html5_translation_table_specialchars() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_SPECIALCHARS,
            ENT_HTML5,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_xhtml_translation_table_specialchars() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_SPECIALCHARS,
            ENT_XHTML,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_xml1_translation_table_specialchars() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_SPECIALCHARS,
            ENT_XML1,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_html401_translation_table_specialchars() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_SPECIALCHARS,
            ENT_HTML401,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_noquotes_translation_table_specialchars() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_SPECIALCHARS,
            ENT_NOQUOTES,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_quotes_translation_table_specialchars() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_SPECIALCHARS,
            ENT_QUOTES,
            'UTF-8'
        )
    );
  }

  /**
   * @return ArrayObject
   */
  public function get_compat_translation_table_specialchars() : ArrayObject
  {
    return new ArrayObject(
        get_html_translation_table(
            HTML_SPECIALCHARS,
            ENT_COMPAT,
            'UTF-8'
        )
    );
  }



}