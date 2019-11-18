<?php


namespace cls\types\string_operations;

/**
 * Trait THtmlEntityDecode
 * @package cls\types\string_operations
 */
trait THtmlEntityDecode
{

  /**
   * @param int $quote_style
   * @param string $charset
   * @return $this
   */
  public function html_entity_decode(
      int $quote_style =  ENT_COMPAT | ENT_HTML401 , string $charset = ''
  ) : self {
    $charset = $charset ?: ini_get('default_charset' );
    $this -> str = html_entity_decode( $this -> str , $quote_style , $charset );
    return $this;
  }

  /**
   * @return $this
   */
  public function compat_entity_decode() : self {
    $this -> str = html_entity_decode( $this -> str , ENT_COMPAT , 'UTF-8' );
    return $this;
  }

  /**
   * @return $this
   */
  public function quotes_entity_decode() : self {
    $this -> str = html_entity_decode( $this -> str , ENT_QUOTES , 'UTF-8' );
    return $this;
  }

  /**
   * @return $this
   */
  public function noquotes_entity_decode() : self {
    $this -> str = html_entity_decode( $this -> str , ENT_NOQUOTES , 'UTF-8' );
    return $this;
  }

  /**
   * @return $this
   */
  public function html401_entity_decode() : self {
    $this -> str = html_entity_decode( $this -> str , ENT_HTML401 , 'UTF-8' );
    return $this;
  }

  /**
   * @return $this
   */
  public function xml1_entity_decode() : self {
    $this -> str = html_entity_decode( $this -> str , ENT_XML1, 'UTF-8' );
    return $this;
  }

  /**
   * @return $this
   */
  public function xhtml_entity_decode() : self {
    $this -> str = html_entity_decode( $this -> str , ENT_XHTML, 'UTF-8' );
    return $this;
  }

  /**
   * @return $this
   */
  public function html5_entity_decode() : self {
    $this -> str = html_entity_decode( $this -> str , ENT_HTML5, 'UTF-8' );
    return $this;
  }


}