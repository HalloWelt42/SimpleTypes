<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 20.10.19
 * Time: 00:54
 */

namespace cls\types\string_operations;

trait TPreDefinedStringOperations
{

  /**
   * eigene Methoden
   */
  use TControlCharacter;

  /**
   * PHP definierte und abgeleitete Methoden
   */
  use TAddCSlashes;
  use TAddSlashes;
  use TBin2Hex;
  use TChop;
  use TChunkSplit;
//  convert_cyr_string
  use TUnix2UnixEncode;
  use TUnix2UnixDecode;
  use TCountChars;
  use TCRC32;
//  crypt
  use TExplode;
//  fprintf
  use THtmlTranslationTable;
//  hebrev
//  hebrevc
  use THex2Bin;
  use THtmlEntityDecode;
  use THtmlSpecialCharsDecode;
  use THtmlSpecialChars;



}