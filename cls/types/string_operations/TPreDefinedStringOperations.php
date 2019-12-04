<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 20.10.19
 * Time: 00:54
 */

namespace cls\types\string_operations;

/**
 * Trait TPreDefinedStringOperations
 * @package cls\types\string_operations
 */
trait TPreDefinedStringOperations
{

  /**
   * PHP definierte und abgeleitete Methoden
   */
  use TAddCSlashes;
  use TAddSlashes;
  use TBin2Hex;
  use TChop;
  use TChunkSplit;
// convert_cyr_string
// convert_uudecode
// convert_uuencode
  use TCountChars;
  use TCRC32;
// crypt
  use TEcho;
  use TExplode;
// fprintf
  use THtmlTranslationTable;
// hebrev
// hebrevc
  use THex2Bin;
  use THtmlEntityDecode;
  use THtmlSpecialCharsDecode;
  use THtmlSpecialChars;
  use TLCFirst;
// levenshtein
  use Tltrim;
  use TMD5;
  use TMetaphone;
  use TNlToBr;
  use TParseString;
  use TPrint;
// quoted_printable_decode
// quoted_printable_encode

  use TRtrim;
  use TTrim;
  use TSHA1;
  use TStrIReplace;
  use TStrPad;

  use TUnix2UnixEncode;
  use TUnix2UnixDecode;




}