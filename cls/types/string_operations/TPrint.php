<?php


namespace cls\types\string_operations;


use cls\types\UInt8;

trait TPrint
{

    /**
     * @return UInt8
     */
    public function print() : UInt8
    {
        return new UInt8( print $this -> str );
    }

}