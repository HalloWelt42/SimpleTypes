<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 20.10.19
 * Time: 22:56
 */

namespace cls\types\number_operations;

use cls\types\StringType;

trait TChr
{

    /**
     * chr — Erzeuge eine Ein-Byte-Zeichenkette aus einer Zahl
     *
     * Gibt einen Ein-Zeichen-String zurück, der das angegebene Zeichen enthält, wobei bytevalue als vorzeichenlose
     * Ganzzahl interpretiert wird.
     *
     * Dies kann verwendet werden, um einen Ein-Zeichen-String in einer Ein-Byte-Kodierung wie ASCII, ISO-8859 oder
     * Windows 1252 zu erzeugen, indem die Position des gewünschten Zeichens in der Kodierungszuordnungstabelle
     * übergeben wird. Allerdings ist zu beachten, dass diese Funktion die Zeichenkettenkodierung ignoriert, und
     * insbesondere kein Unicode Code-Point übergeben werden kann, um eine Zeichenkette in einer Multi-Byte-Kodierung
     * wie UTF-8 oder UTF-16 zu erzeugen.
     *
     * Die Funktion ergänzt ord().
     *
     * bytevalue
     * Ein Integer zwischen 0 und 255.
     *
     * Werte außerhalb des gültigen Bereichs (0..255) werden bitweise mit 255 und-verknüpft, was gleichwertig zu
     * folgendem Algorithmus ist:
     *
     *          while ($bytevalue < 0) {
     *              $bytevalue += 256;
     *          }
     *          $bytevalue %= 256;
     *
     *
     * @return StringType
     */
    public function chr()
    {
        return new StringType(
            chr ( $this -> value )
        );
    }

}