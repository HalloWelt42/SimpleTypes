<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 20.10.19
 * Time: 22:37
 */

namespace cls\types\string_operations;

/**
 * Trait TChop
 * @package cls\types\string_operations
 */
trait TChop
{
    /**
     * Diese Funktion gibt den String str zurück, von dessen Ende alle Whitespaces (oder andere Zeichen) entfernt
     * wurden.
     *
     * Ohne den zweiten Parameter entfernt rtrim() diese Zeichen:
     *
     * " " (ASCII 32 (0x20)), ein einfaches Leerzeichen.
     * "\t" (ASCII 9 (0x09)), ein Tabulator.
     * "\n" (ASCII 10 (0x0A)), ein Zeilenvorschub (line feed).
     * "\r" (ASCII 13 (0x0D)), ein Wagenrücklauf-Zeichen (carriage return).
     * "\0" (ASCII 0 (0x00)), das NULL-Byte.
     * "\x0B" (ASCII 11 (0x0B)), ein vertikaler Tabulator.
     *
     *
     * character_mask
     * Sie können mittels des character_mask-Parameters eigene Zeichen angeben, die Sie entfernen lassen möchten.
     * Führen Sie einfach alle zu löschenden Zeichen auf. Mittels .. können Sie einen Bereich von Zeichen benennen.
     *
     * @param string|null $character_mask
     *
     * @return $this
     */
    public function chop( $character_mask = NULL ) : self
    {
        $this -> str = chop ( $this -> str, $character_mask );

        return $this;
    }


}