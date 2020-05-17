<?php

namespace App\SOAP\Types;


class City
{

    /**
     * @var string
     */
    public $name;

    /**
     * Product constructor.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

}
