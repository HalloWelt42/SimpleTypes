<?php


namespace cls\types\string_operations;


use cls\types\ArrayType;

/**
 * Trait TParseString
 * @package cls\types\string_operations
 */
trait TParseString
{

    /**
     * @return ArrayType
     */
    public function parse_str() : ArrayType
    {
        parse_str($this->str,$arr);
        return new ArrayType( $arr );
    }

}