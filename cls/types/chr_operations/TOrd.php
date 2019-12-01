<?php


namespace cls\types\chr_operations;


use cls\types\UInt8;

trait TOrd
{

    public function ord(){
        return new UInt8( ord( $this->str ) );
    }

}