<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 19.10.19
 * Time: 23:52
 */

namespace cls\types\string_operations;

/**
 * Trait TAddCSlashes
 * @package cls\types\string_operations
 */
trait TAddCSlashes
{

    /**
     * Gibt eine Zeichenkette zurück, in der allen Zeichen, die in charlist aufgeführt sind, ein "\" vorangestellt ist.
     *
     * charlist
     * Eine Liste der zu escapenden Zeichen. Wenn charlist Zeichen wie \n, \r etc. enthält, werden diese im C-Stil
     * konvertiert, während andere nicht-alphanumerische Zeichen mit einem ASCII-Wert kleiner als 32 oder höher als 126
     * in ihre oktale Repräsentation umgewandelt werden.
     *
     * Wenn Sie eine Zeichensequenz im charlist-Parameter notieren, informieren Sie sich darüber, welche Zeichen sich
     * zwischen dem ersten und dem letzten Zeichen befinden!
     *
     * Beachten Sie zudem, dass sofern das erste Zeichen einer Sequenz einen höheren ASCII-Wert hat als das zweite,
     * keine Sequenz erstellt wird. Nur das erste und das letzte Zeichen sowie Punkte werden dann escaped. Verwenden
     * Sie die Funktion ord(), um den ASCII-Wert eines Zeichens zu ermitteln.
     *
     * Seien Sie besonders vorsichtig, wenn Sie Zeichen wie 0, a, b, f, n, r, t oder v escapen möchten. Sie werden zu
     * \0, \a, \b, \f, \n, \r, \t oder \v gewandelt, die in C sämtlich vordefinierte Escape-Sequenzen sind. Viele
     * dieser Sequenzen sind ebenfalls in anderen von C abgeleiteten Sprachen, einschließlich PHP, vordefiniert, was
     * bedeutet, dass Sie u.U. nicht das gewünschte Ergebnis erhalten, wenn Sie die Rückgabe von addslashes()
     * verwenden, um Code in diesen Sprachen zu erzeugen, wenn diese Zeichen in charlist definiert sind.
     *
     *
     *
     * @param $charlist
     *
     * @return $this
     */
    public function addcslashes ( $charlist ) : self
    {
        $this -> str = addcslashes( $this -> str , $charlist );

        return $this;
    }

}