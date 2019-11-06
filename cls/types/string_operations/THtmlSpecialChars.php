<?php


namespace cls\types\string_operations;


trait THtmlSpecialChars
{

  /**
   * @param int $flags
   * @param string $encoding
   * @param bool $double_encode
   * @return $this
   */
  public function htmlspecialchars (
      int $flags = ENT_COMPAT | ENT_HTML401 ,
      string $encoding = '' ,
      bool $double_encode = TRUE
  ) : self {
    $encoding = $encoding ?: ini_get('default_charset');
    $this -> str = htmlspecialchars( $this -> str , $flags , $encoding , $double_encode );
    return $this;
  }

  /**
   * Konvertiert nur doppelte Anführungszeichen und lässt einfache Anführungszeichen unverändert.
   *
   * @return $this
   */
  public function specialchars_compat() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_COMPAT );
    return $this;
  }

  /**
   * Konvertiert sowohl doppelte als auch einfache Anführungszeichen.
   *
   * @return $this
   */
  public function specialchars_quotes() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_QUOTES );
    return $this;
  }

  /**
   * Lässt doppelte und einfache Anführungszeichen unverändert.
   *
   * @return $this
   */
  public function specialchars_noquotes() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_NOQUOTES );
    return $this;
  }

  /**
   * Verwirft ungültige Code Unit Sequenzen anstatt eine leere Zeichenkette zurückzugeben.
   * Die Nutzung dieser Option ist nicht empfehlenswert, da sie » Auswirkungen auf die Sicherheit haben kann.
   *
   * @return $this
   */
  public function specialchars_ignore() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_IGNORE );
    return $this;
  }

  /**
   * Ersetzt ungültige Code Unit Sequenzen mit einem Unicode Ersatz Zeichen U+FFFD (UTF-8) oder &#xFFFD;
   * (andernfalls) anstatt eine leere Zeichenkette zurückzugeben.
   *
   * @return $this
   */
  public function specialchars_substitute() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_SUBSTITUTE );
    return $this;
  }

  /**
   * Ersetzt Codepoints, welche in dem angegebenen Dokumenttyp ungültig sind,
   * mit einem Unicode Ersatz Zeichen U+FFFD (UTF-8) oder &#xFFFD; (andernfalls),
   * anstatt sie zu belassen. Das kann zum Beispiel nützlich sein,
   * um die Wohlgeformtheit von XML-Dokumenten mit eingebetteten externen Inhalten sicherzustellen.
   *
   * @return $this
   */
  public function specialchars_disallowed() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_DISALLOWED );
    return $this;
  }

  /**
   * Behandle Code als HTML 4.01
   *
   * @return $this
   */
  public function specialchars_html401() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_HTML401 );
    return $this;
  }

  /**
   * Behandle Code als XML 1
   *
   * @return $this
   */
  public function specialchars_xml1() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_XML1 );
    return $this;
  }

  /**
   * Behandle Code als XHTML
   *
   * @return $this
   */
  public function specialchars_xhtml() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_XHTML );
    return $this;
  }

  /**
   * Behandle Code als HTML 5
   *
   * @return $this
   */
  public function specialchars_html5() : self {
    $this -> str = htmlspecialchars( $this -> str , ENT_HTML5 );
    return $this;
  }


}