<?php


namespace cls\types;


use cls\types\float_operations\TPreDefinedFloatOperations;
use JsonSerializable;

class FloatType implements JsonSerializable
{
    use TPreDefinedFloatOperations;

    /**
     * @var float
     */
    protected float $value;

    /**
     * FloatType constructor.
     *
     * @param float $value float
     */
    public function __construct ( float $value = 0.0 )
    {
        $this -> value = $value;
    }

    /**
     * @return float
     */
    public function __invoke () : float
    {
        return $this -> value;
    }


    /**
     * @return string
     */
    public function __toString () : string
    {
        return $this -> value . '';
    }

    /**
     * Specify data which should be serialized to JSON
     * @link  https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize ()
    {
        return $this -> value;
    }
}