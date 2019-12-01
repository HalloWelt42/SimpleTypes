<?php


namespace cls\types\float_operations;


use cls\types\StringType;

trait TNumberFormat
{

    /**
     * @param int    $decimals
     * @param string $dec_point
     * @param string $thousands_sep
     *
     * @return StringType
     */
    public function number_format ( $decimals = 0 , $dec_point = '.' , $thousands_sep = ',' ) : StringType
    {
        return new StringType(
            number_format( $this -> value , $decimals , $dec_point , $thousands_sep )
        );
    }

}