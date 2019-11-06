<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 20.10.19
 * Time: 00:19
 */

namespace cls\types\string_operations;

trait TAddSlashes
{

    /**
     * addslashes — Stellt bestimmten Zeichen eines Strings ein "\" voran
     *
     * @return $this
     */
    public function addslashes() : self
    {
        $this -> str = addslashes ( $this -> str );
        return $this;
    }

}