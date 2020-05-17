<?php

namespace App\SOAP\Types;


class HelloWorld
{
    /**
     * @var string
     */
    public $text;

    /**
     * Product constructor.
     *
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

}
