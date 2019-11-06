<?php


namespace cls\types\string_operations;


trait THtmlSpecialCharsDecode
{


  /**
   * @return $this
   */
  public function htmlspecialchars_compat_decode() : self {
    $this -> str = htmlspecialchars_decode(
        $this -> str , ENT_COMPAT
    );
    return $this;
  }

  /**
   * @return $this
   */
  public function htmlspecialchars_quotes_decode() : self {
    $this -> str = htmlspecialchars_decode(
        $this -> str , ENT_QUOTES
    );
    return $this;
  }

  /**
   * @return $this
   */
  public function htmlspecialchars_qnoquotes_decode() : self {
    $this -> str = htmlspecialchars_decode(
        $this -> str , ENT_NOQUOTES
    );
    return $this;
  }

  /**
   * @return $this
   */
  public function htmlspecialchars_html401_decode() : self {
    $this -> str = htmlspecialchars_decode(
        $this -> str , ENT_HTML401
    );
    return $this;
  }

  /**
   * @return $this
   */
  public function htmlspecialchars_xml1_decode() : self {
    $this -> str = htmlspecialchars_decode(
        $this -> str , ENT_XML1
    );
    return $this;
  }

  /**
   * @return $this
   */
  public function htmlspecialchars_xhtml_decode() : self {
    $this -> str = htmlspecialchars_decode(
        $this -> str , ENT_XHTML
    );
    return $this;
  }

  /**
   * @return $this
   */
  public function htmlspecialchars_html5_decode() : self {
    $this -> str = htmlspecialchars_decode(
        $this -> str , ENT_HTML5
    );
    return $this;
  }

  /**
   * htmlspecialchars_decode — Konvertiert besondere HTML-Auszeichnungen zurück in Buchstaben
   *
   * @param int $flags
   * @return $this
   */
  public function htmlspecialchars_decode( int $flags  = ENT_COMPAT | ENT_HTML401 ) : self {
    $this -> str = htmlspecialchars_decode( $this -> str , $flags );
    return $this;
  }


}